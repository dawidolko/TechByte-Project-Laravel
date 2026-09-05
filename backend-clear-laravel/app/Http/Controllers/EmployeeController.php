<?php

namespace App\Http\Controllers;
use App\Models\Orders as Order;
use App\Models\Customers as Customer;
use App\Models\Products as Product;
use App\Models\Complaints as Complaint;
use App\Models\Employees as Employee;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function dashboard()
{
    $numberOfOrders = Order::count();
    $numberOfClients = Customer::count();
    $numberOfProducts = Product::count();
    $numberOfComplaints = Complaint::count();
    
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.dashboard', compact('numberOfOrders', 'numberOfClients', 'numberOfProducts', 'numberOfComplaints', 'employeeName', 'employeeLastName', 'jobPosition'));
}

public function Orders()
{
    $order = Order::paginate(10);
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.orders', compact('order', 'employeeName', 'employeeLastName', 'jobPosition'));
}

public function showOrder($id)
{
    $order = Order::with('customer')->findOrFail($id); // Załadowanie klienta wraz z zamówieniem    
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.show', compact('order','employeeName', 'employeeLastName', 'jobPosition'));
}

public function Products()
{
    $products = Product::with('categories')->paginate(5);
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.products', compact('products', 'employeeName', 'employeeLastName', 'jobPosition'));
}

public function listProducts(Request $request)
{
    $search = $request->input('search');
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    $products = Product::with('categories')
    ->when($search, function ($query) use ($search) {
        return $query->whereRaw('LOWER(name) like ?', ['%' . strtolower($search) . '%']);
    })
    ->paginate(10);

    return view('employee.products', compact('products', 'employeeName', 'employeeLastName', 'jobPosition'));
}

public function editProduct($id)
{
    $product = Product::findOrFail($id);
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.editProduct', compact('product','employeeName', 'employeeLastName', 'jobPosition'));
}

public function updateOrderStatus(Request $request, $id)
{
    $order = Order::findOrFail($id);
    $order->status = $request->input('status_order');
    $order->save();

    return redirect()->route('employee.show', $id)->with('success', 'Status updated successfully!');
}

public function updateProduct(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:100',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'sale_id' => 'nullable|integer',
        'old_price' => 'nullable|numeric',
        'description' => 'nullable|string',
    ]);

    $product = Product::findOrFail($id);
    $product->update([
        'NAME' => $request->name,
        'PRICE' => $request->price,
        'QUANTITIES_AVAILABLE' => $request->quantity,
        'SALE_ID' => $request->sale_id,
        'OLD_PRICE' => $request->old_price,
        'DESCRIPTION' => $request->description,
    ]);

    return redirect()->route('employee.products')->with('success__edit', 'Product updated successfully!');
}

public function destroyProduct($id)
{
    $product = Product::with('specifications', 'photosProducts', 'productsCategories')->findOrFail($id);

    foreach ($product->specifications as $specification) {
        $specification->delete();
    }

    foreach ($product->photosProducts as $photo) {
        $photo->delete();
    }

    $product->categories()->detach();

    $product->delete();

    return redirect()->route('employee.products')->with('success', 'Product and all related records successfully deleted.');
}

public function addProduct()
{
    $product = Product::All();
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.addProduct', compact('product','employeeName', 'employeeLastName', 'jobPosition'));
}

public function newProduct(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'sale_id' => 'nullable|integer',
        'old_price' => 'nullable|numeric',
        'description' => 'nullable|string',
        'category_id' => 'required|integer|exists:categories,id'
    ]);

    DB::beginTransaction();
    try {
        $currentMaxId = DB::table('products')->max('ID');
        $newId = $currentMaxId ? $currentMaxId + 1 : 106;

        $productId = DB::table('products')->insertGetId([
            'ID' => $newId,
            'NAME' => $validated['name'],
            'PRICE' => $validated['price'],
            'QUANTITIES_AVAILABLE' => $validated['quantity'],
            'SALE_ID' => $validated['sale_id'] ?? null,
            'OLD_PRICE' => $validated['old_price'] ?? null,
            'DESCRIPTION' => $validated['description'],
        ], 'ID');

        if (isset($validated['category_id'])) {
            DB::table('products_categories')->insert([
                'products_id' => $productId,
                'category_id' => $validated['category_id'],
            ]);
        }

        DB::commit();
        return redirect()->route('employee.products')->with('success', 'Produkt dodany pomyślnie.');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->route('employee.products')->with('error', 'Błąd dodawania produktu: ' . $e->getMessage());
    }
}

public function complaints()
{
    $complaints = Complaint::paginate(10);
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.complaints', compact('complaints', 'employeeName', 'employeeLastName', 'jobPosition'));
}

public function updateComplaintStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:pending,accepted,rejected'
    ]);

    $complaint = Complaint::findOrFail($id);
    $complaint->status = $request->status;
    $complaint->save();

    return redirect()->back()->with('success', 'Status updated successfully.');
}


public function customers()
{
    $customers = Customer::paginate(10);
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;
  
    return view('employee.customers', compact('customers', 'employeeName', 'employeeLastName', 'jobPosition'));
}

public function listCustomers(Request $request)
{
    $search = $request->input('search');
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    $customers = Customer::where('email', 'like', '%' . $search . '%')
                         ->paginate(10);

    return view('employee.customers', compact('customers', 'employeeName', 'employeeLastName', 'jobPosition'));
}

public function editCustomer($id)
{
    $customer = Customer::findOrFail($id);
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.editCustomer', compact('customer','employeeName', 'employeeLastName', 'jobPosition'));
}

public function updateCustomer(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:20',
        'last_name' => 'required|string|max:50',
        'address' => 'required|string|max:100',
        'phone' => 'required|string|max:20',
        'email' => 'nullable|string|max:100',
    ]);

    $customer = Customer::findOrFail($id);
    $customer->update([
        'NAME' => $request->name,
        'LAST_NAME' => $request->last_name,
        'ADDRESS' => $request->delivery_address,
        'PHONE' => $request->phone_number,
        'EMAIL' => $request->email,
    ]);

    return redirect()->route('employee.customers')->with('success__edit', 'Customer updated successfully!');
}

public function destroyCustomer($id)
{
    DB::beginTransaction();
    try {
        DB::table('opinions')->where('customers_id', $id)->delete();

        DB::table('newsletter')->where('CUSTOMERS_ID', $id)->delete();

        $orders = DB::table('orders')->where('customers_id', $id)->pluck('id');
        DB::table('complaints')->whereIn('orders_id', $orders)->delete();
        DB::table('order_product')->whereIn('order_id', $orders)->delete();
        DB::table('orders')->where('customers_id', $id)->delete();

        DB::table('customers')->where('id', $id)->delete();

        DB::commit();
        return redirect()->route('employee.customers')->with('success', 'Klient i wszystkie powiązane rekordy zostały pomyślnie usunięte.');
    } catch (QueryException $e) {
        DB::rollBack();
        return redirect()->route('employee.customers')->with('error', 'Błąd podczas usuwania klienta: ' . $e->getMessage());
    }
}


public function getOrderDataByYear($year)
{
    /*
     * MONTH()/YEAR() zamiast TO_DATE().
     *
     * Zapytanie pochodzilo z czasow, gdy projekt stal na Oracle — `TO_DATE`
     * nie istnieje w MySQL, wiec wykres zamowien na pulpicie pracownika
     * konczyl sie bledem 500 przy kazdym otwarciu panelu.
     */
    $orders = DB::table('orders')
                ->select(DB::raw('MONTH(date_order) as month'), DB::raw('COUNT(*) as count'))
                ->whereRaw('YEAR(date_order) = ?', [$year])
                ->groupBy(DB::raw('MONTH(date_order)'))
                ->orderBy('month')
                ->get();

    return response()->json($orders);
}

public function logout(Request $request)
{
    Auth::guard('employee')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}

}
