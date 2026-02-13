<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LaptopsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\SearchController;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/computers', [ComputersController::class, 'computers'])->name('computers.index');
Route::get('/computers/{id}', [ComputersController::class, 'show'])->name('computers.show');
Route::get('/laptops', [LaptopsController::class, 'laptops'])->name('laptops.index');
Route::get('/laptops/{id}', [LaptopsController::class, 'show'])->name('laptops.show');
Route::get('/components', [ComponentsController::class, 'components'])->name('components.index');
Route::get('/components/{id}', [ComponentsController::class, 'show'])->name('components.show');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/favorite', [FavoriteController::class, 'favorite'])->name('favorite');
Route::get('/faq', [MainController::class, 'faq'])->name('faq');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/sales', [MainController::class, 'sales'])->name('sales');
Route::get('/privacy', [MainController::class, 'privacy'])->name('privacy');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/cart/remove/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/favorites/remove/{id}', [FavoriteController::class, 'removeFromFavorites'])->name('favorites.remove');
Route::post('/cart/add-multiple', [CartController::class, 'addMultipleToCart'])->name('cart.addMultiple');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/search', [SearchController::class, 'search'])->name('products.search');

// Ścieżka dla dashboardu klienta
Route::middleware(['auth:customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('/customer/profile', [CustomerController::class, 'profile'])->name('customer.profile');
    Route::get('/customer/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::get('/customer/settings', [CustomerController::class, 'settings'])->name('customer.settings');
    Route::post('/customer/settings/update', [CustomerController::class, 'updateSettings'])->name('customer.updateSettings');
    Route::post('/customer/change_password', [CustomerController::class, 'changePassword'])->name('customer.change_password');
    Route::post('/favorites/add/{id}', [FavoriteController::class, 'addToFavorites'])->name('favorites.add');
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    
    Route::post('/store-opinion', [OpinionController::class, 'store'])->name('opinions.store');
    Route::post('/store-complaint', [ComplaintController::class, 'store'])->name('complaints.store');
    Route::post('/manage-newsletter', [NewsletterController::class, 'manage'])->name('newsletter.manage');
    Route::post('/logout1', [AuthController::class, 'logout1'])->name('logout1');
});

// Ścieżka dla dashboardu pracownika
Route::middleware(['auth:employee'])->group(function () {
    Route::get('/employee/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
    Route::get('/employee/orders', [EmployeeController::class, 'Orders'])->name('employee.orders');
    Route::get('/employee/products', [EmployeeController::class, 'Products'])->name('employee.products');
    Route::get('/employee/show/{id}', [EmployeeController::class, 'showOrder'])->name('employee.show');
    Route::get('/products', [EmployeeController::class, 'listProducts'])->name('employee.listProducts');
    Route::get('/employee/editProduct/{id}', [EmployeeController::class, 'editProduct'])->name('employee.editProduct');
    Route::put('/employee/updateOrderStatus/{id}', [EmployeeController::class, 'updateOrderStatus'])->name('employee.updateOrderStatus');
    Route::put('/employee/products/updateProduct/{id}', [EmployeeController::class, 'updateProduct'])->name('employee.updateProduct');
    Route::delete('/employee/products/{id}', [EmployeeController::class, 'destroyProduct'])->name('employee.destroyProduct');
    Route::get('/employee/addProduct', [EmployeeController::class, 'addProduct'])->name('employee.addProduct');
    Route::post('/employee/newProduct', [EmployeeController::class, 'newProduct'])->name('employee.newProduct');
    Route::get('/employee/complaints', [EmployeeController::class, 'complaints'])->name('employee.complaints');
    Route::get('/employee/customers', [EmployeeController::class, 'customers'])->name('employee.customers');
    Route::get('/customers', [EmployeeController::class, 'listCustomers'])->name('employee.listCustomers');
    Route::get('/employee/editCustomer/{id}', [EmployeeController::class, 'editCustomer'])->name('employee.editCustomer');
    Route::put('/employee/customers/updateCustomer/{id}', [EmployeeController::class, 'updateCustomer'])->name('employee.updateCustomer');
    Route::delete('/employee/customers/{id}', [EmployeeController::class, 'destroyCustomer'])->name('employee.destroyCustomer');
    Route::post('/logout', [EmployeeController::class, 'logout'])->name('logout');
    Route::post('/complaints/update-status/{id}', [EmployeeController::class, 'updateComplaintStatus'])->name('complaints.update-status');
    Route::get('/employee/customer', function (){
        return view('employee.customer');
    })->name('employee.customer');
});



Route::get('/api/orders/{year}', [EmployeeController::class, 'getOrderDataByYear']);
Route::get('/cart-counts', [CartController::class, 'getCartAndFavoritesCount'])->name('cart.counts');
Route::get('/test-orders', function () {
    $user = Auth::user();
    $orders = $user->orders()->with('products')->get();
    dd($orders);
});

// Debug route for images
Route::get('/debug-images', function () {
    $product = App\Models\Products::with('photosProducts')->first();
    
    if ($product) {
        $photos = $product->photosProducts;
        
        return response()->json([
            'product_id' => $product->id,
            'product_name' => $product->NAME,
            'photos_count' => $photos->count(),
            'photos' => $photos->map(function($photo) {
                return [
                    'id' => $photo->id,
                    'path_raw' => $photo->PATH,
                    'path_accessor' => $photo->path,
                    'full_url' => asset('storage/images/' . $photo->PATH),
                ];
            }),
        ]);
    }
    
    return response()->json(['error' => 'No products found']);
});
