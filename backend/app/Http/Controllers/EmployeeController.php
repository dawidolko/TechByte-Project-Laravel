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
use PDO;
use Illuminate\Pagination\LengthAwarePaginator;

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
    $orderDetails = Order::getOrderDetails($id);
    $order = Order::with('customer')->findOrFail($id);
    $employeeName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->NAME;
    $employeeLastName = Employee::where('id', auth()->guard('employee')->user()->id)->first()->LAST_NAME;
    $jobPosition = Employee::where('id', auth()->guard('employee')->user()->id)->first()->JOB_POSITION;

    return view('employee.show', compact(
        'order',
        'employeeName' ,
        'employeeLastName',
        'jobPosition' ,
        'orderDetails'
    ));
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

    $products = collect();

    if ($search) {
        try {
            $conn = oci_connect(env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_CONNECTION_STRING'));

            $sql = "BEGIN search_products_by_name(:name, :cursor); END;";
            $stmt = oci_parse($conn, $sql);

            $cursor = oci_new_cursor($conn);
            $searchParam = $search;

            oci_bind_by_name($stmt, ':name', $searchParam);
            oci_bind_by_name($stmt, ':cursor', $cursor, -1, OCI_B_CURSOR);

            oci_execute($stmt);
            oci_execute($cursor, OCI_DEFAULT);

            oci_fetch_all($cursor, $results, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

            oci_free_statement($stmt);
            oci_free_statement($cursor);
            oci_close($conn);

            $products = collect($results)->groupBy('ID')->map(function ($group) {
                $first = $group->first();
                $categories = $group->pluck('CATEGORY_DESCRIPTION')->filter()->unique()->values();
                
                return (object) [
                    'id' => $first['ID'],
                    'name' => $first['NAME'],
                    'price' => $first['PRICE'],
                    'quantities_available' => $first['QUANTITIES_AVAILABLE'],
                    'sale_id' => $first['SALE_ID'],
                    'old_price' => $first['OLD_PRICE'],
                    'description' => $first['DESCRIPTION'],
                    'categories' => $categories->map(function ($description) {
                        return (object) ['description' => $description];
                    })
                ];
            });

            $perPage = 10;
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $currentPageResults = $products->slice(($currentPage - 1) * $perPage, $perPage)->values();
            $products = new LengthAwarePaginator($currentPageResults, $products->count(), $perPage);

        } catch (\Exception $e) {
            return redirect()->route('employee.products')->with('error', 'Failed to search products: ' . $e->getMessage());
        }
    } else {
        $products = Product::with('categories')->paginate(10);
    }

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

    $sale_id = $request->sale_id ? $request->sale_id : 'NULL';
    $old_price = $request->old_price ? $request->old_price : 'NULL';
    $description = addslashes($request->description);

    try {
        DB::connection('oracle')->getPdo()->exec("BEGIN update_product_by_id(
            {$id},
            '".addslashes($request->name)."',
            {$request->price},
            {$request->quantity},
            {$sale_id},
            {$old_price},
            '{$description}'
        ); END;");
        
        return redirect()->route('employee.products')->with('success__edit', 'Product updated successfully!');
    } catch (\Exception $e) {
        return redirect()->route('employee.products')->with('error', 'Failed to update product: ' . $e->getMessage());
    }
}


public function destroyProduct($id)
{
    try {
        DB::connection('oracle')->getPdo()->exec("BEGIN delete_product_by_id({$id}); END;");
        
        return redirect()->route('employee.products')->with('success', 'Product and all related records successfully deleted.');
    } catch (\Exception $e) {
        return redirect()->route('employee.products')->with('error', 'Failed to delete product: ' . $e->getMessage());
    }
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
        /*
         * Call the PL/SQL procedure
         */
        DB::statement('BEGIN add_product(:name, :price, :quantity, :sale_id, :old_price, :description, :category_id); END;', [
            'name' => $validated['name'],
            'price' => $validated['price'],
            'quantity' => $validated['quantity'],
            'sale_id' => $validated['sale_id'] ?? null,
            'old_price' => $validated['old_price'] ?? null,
            'description' => $validated['description'],
            'category_id' => $validated['category_id']
        ]);

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

    $customers = collect();

    if ($search) {
        try {
            /*
             * Use a raw OCI8 connection
             */
            $conn = oci_connect(env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_CONNECTION_STRING'));

            /*
             * Prepare the PL/SQL procedure
             */
            $sql = "BEGIN search_customers_by_email(:email, :cursor); END;";
            $stmt = oci_parse($conn, $sql);

            $cursor = oci_new_cursor($conn);
            $searchParam = $search;

            oci_bind_by_name($stmt, ':email', $searchParam);
            oci_bind_by_name($stmt, ':cursor', $cursor, -1, OCI_B_CURSOR);

            oci_execute($stmt);
            oci_execute($cursor, OCI_DEFAULT);

            oci_fetch_all($cursor, $results, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

            oci_free_statement($stmt);
            oci_free_statement($cursor);
            oci_close($conn);

            $customers = collect($results)->map(function ($customer) {
                return (object) [
                    'id' => $customer['ID'],
                    'name' => $customer['NAME'],
                    'last_name' => $customer['LAST_NAME'],
                    'delivery_address' => $customer['DELIVERY_ADDRESS'],
                    'phone_number' => $customer['PHONE_NUMBER'],
                    'email' => $customer['EMAIL'],
                ];
            });

            $perPage = 10;
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $currentPageResults = $customers->slice(($currentPage - 1) * $perPage, $perPage)->values();
            $customers = new LengthAwarePaginator($currentPageResults, $customers->count(), $perPage);

        } catch (\Exception $e) {
            return redirect()->route('employee.customers')->with('error', 'Failed to search customers: ' . $e->getMessage());
        }
    } else {
        $customers = Customer::paginate(10);
    }

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
        'delivery_address' => 'required|string|max:100',
        'phone_number' => 'required|string|max:20',
        'email' => 'nullable|string|max:100',
    ]);

    $email = $request->email ? "'" . addslashes($request->email) . "'" : 'NULL';

    try {
        DB::connection('oracle')->getPdo()->exec("BEGIN update_customer_by_id(
            {$id},
            '".addslashes($request->name)."',
            '".addslashes($request->last_name)."',
            '".addslashes($request->delivery_address)."',
            '".addslashes($request->phone_number)."',
            {$email}
        ); END;");
        
        return redirect()->route('employee.customers')->with('success__edit', 'Customer updated successfully!');
    } catch (\Exception $e) {
        return redirect()->route('employee.customers')->with('error', 'Failed to update customer: ' . $e->getMessage());
    }
}

public function destroyCustomer($id)
{
    try {
        DB::connection('oracle')->getPdo()->exec("BEGIN delete_customer_by_id({$id}); END;");
        
        return redirect()->route('employee.customers')->with('success', 'Customer and all related records successfully deleted.');
    } catch (\Exception $e) {
        return redirect()->route('employee.customers')->with('error', 'Failed to delete customer: ' . $e->getMessage());
    }
}

public function getOrderDataByYear($year)
{
    $orders = DB::table('orders')
                ->select(DB::raw("EXTRACT(MONTH FROM TO_DATE(date_order, 'YY/MM/DD HH24:MI:SS')) as month"), DB::raw("COUNT(*) as count"))
                ->whereRaw("EXTRACT(YEAR FROM TO_DATE(date_order, 'YY/MM/DD HH24:MI:SS')) = ?", [$year])
                ->groupBy(DB::raw("EXTRACT(MONTH FROM TO_DATE(date_order, 'YY/MM/DD HH24:MI:SS'))"))
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
