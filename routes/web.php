<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductOrderController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LogicController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});
  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {

    // intraday
    Route::get('/firebase-data', [LogicController::class, 'index']);
    // intraday



    Route::resource('shops', ShopController::class);
    Route::post('/pay-shop-due', [ShopController::class, 'pay_shop_due']);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('/user-index', [UserController::class, 'user_index'])->name('user-index'); //new
    Route::post('/report_filter', [UserController::class, 'report_filter'])->name('report-filter'); //new
    
    Route::resource('products', ProductController::class);
    Route::get('/products-index', [ProductController::class, 'products_index'])->name('products-index');
    Route::post('/active-status', [ProductController::class, 'active_status'])->name('active-status');

    Route::resource('productOrders', ProductOrderController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::post('/get-data-by-id', [HomeController::class, 'get_data_by_id']);
    Route::post('/product-filter', [ProductOrderController::class, 'product_filter']);
    Route::get('/product-detail/{id}', [ProductOrderController::class, 'productDetail'])->name('product-detail');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::post('/removeFromCart', [CartController::class, 'removeFromCart'])->name('removeFromCart');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout-index');
    Route::post('/updateQuantity', [CheckoutController::class, 'updateQuantity'])->name('updateQuantity');
    Route::post('/placeOrder', [CheckoutController::class, 'placeOrder'])->name('placeOrder');
    
    Route::post('/editOrder', [OrderController::class, 'editOrder'])->name('editOrder');
    Route::post('/editOrderPrice', [OrderController::class, 'editOrderPrice'])->name('editOrderPrice');
    Route::post('/assign-driver', [OrderController::class, 'assign_driver'])->name('assign-driver');
    // 15-01-24
    Route::get('/orders', [OrderController::class, 'index'])->name('order-list');
    Route::get('/orders-index', [OrderController::class, 'order_index'])->name('orders-index');
    Route::post('/order-filter', [OrderController::class, 'order_filter'])->name('order-filter');
    Route::get('/driver-order-list', [OrderController::class, 'driver_order_list'])->name('driver-order-list');
    Route::post('/driver-update-order', [OrderController::class, 'drive_update_order'])->name('driver-update-order');
    Route::get('/order-details/{order}', [OrderController::class, 'show'])->name('order-details');
    Route::get('/edit-order-details/{order}', [OrderController::class, 'edit_order'])->name('edit-order-details');
    Route::post('/update-order-status', [OrderController::class, 'update_order_status'])->name('update-order-status');
    Route::get('/order_with_shop/{id}', [ProductOrderController::class, 'order_with_shop'])->name('order_with_shop');



    Route::get('/purchase-items', [PurchaseController::class, 'index'])->name('purchase-items');
    Route::get('/purchase-create', [PurchaseController::class, 'create'])->name('purchase-create');
    Route::post('/purchase-store', [PurchaseController::class, 'store'])->name('purchase-store');
    

    // Route::get('/meter-master', [CompanyController::class, 'meter_master'])->name('meter-master')->middleware('CheckCompanyLogin');
});