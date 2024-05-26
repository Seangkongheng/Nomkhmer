<?php

use App\Http\Controllers\adminControler;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartControler;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Catagorycotroler;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\dasboardControler;
use App\Http\Controllers\formlognCotroller;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Menucontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\viewReportController;
use App\Http\Controllers\viewReportOrdercontroller;
use App\Models\Catagory;
use App\Models\customerModel;
use App\Models\productModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/nomkhmer', [FrontEndController::class, 'index']);
Route::get('/productDetail/{id}', [FrontEndController::class, 'detailProduct']);
Route::get('/cart/{id}', [FrontEndController::class, 'cart']);
Route::get('/view', [FrontEndController::class, 'view']);
Route::get('/deletecart/{id}', [FrontEndController::class, 'destroy']);
Route::patch('update_cart', [FrontEndController::class, 'update'])->name('update_cart');
Route::get('/checkout', [FrontEndController::class, 'checkout']);
Route::post('placeorder', [FrontEndController::class, 'placeOrder'])->name('placeorder');
Route::get('/nomkhmer/new', [Menucontroller::class, 'new']);
Route::get('/nomkhmer/types', [Menucontroller::class, 'types']);
Route::get('/nomkhmer/contactus', [Menucontroller::class, 'Contact_us']);
Route::get('/nomkhmer/catagory/desertWater', [Menucontroller::class, 'DesertWater']);
Route::get('/nomkhmer/catagory/Desertsimple', [Menucontroller::class, 'Desertsimple']);
Route::get('/nomkhmer/catagory/sweat', [Menucontroller::class, 'sweat']);
Route::get('/nomkhmer/catagory/baked_cake', [Menucontroller::class, 'baked_cake']);
Route::get('/viewcatagory/{id}', [FrontEndController::class, 'view_catagory']);
Route::get('/cutomer', [FrontEndController::class, 'cutomerlogin']);
Route::post('/registercustomer', [FrontEndController::class, 'registercustomer']);
Route::get('/loginCustomer', [FrontEndController::class, 'loginCustomer']);
Route::post('loginCustomerbuy', [FrontEndController::class, 'loginCustomerbuy']);
Route::get('/product-list', [FrontEndController::class, 'productlisst']);
// Route::post('/place-order', 'OrderController@placeOrder');
// Route::get('/update/{id}',[FrontEndController::class,'update']);
// Route::get('/deletecart/{id}',function(){
//   return "hello word";
//  });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    // return view('admin.dashboard');
    $catagory = Catagory::count();
    $product = productModel::count();
    $customer = customerModel::count();
    // $user=User::where('role_as','0')->count();
    $admin = User::count();
    return view('admin.index', compact('catagory', 'product', 'admin', 'customer'))->with('status', "data update");
});
// Route::middleware(['auth', 'isAdmin'])->group(function () {



    //  Route::get('/dashboard','Admin\FrontendCotroller@index');
    Route::resource('/catagory', Catagorycotroler::class);
    Route::resource('/customer', customercontroller::class);
    Route::resource('/order', OrderController::class);
    Route::resource('/report', ReportController::class);
    Route::resource('/adminshow', adminControler::class);
    Route::get('deletecat/{id}', [Catagorycotroler::class, 'Delete']);
    Route::get('customerdelete/{id}', [customercontroller::class, 'CustomerDelete']);
    Route::resource('/product', productController::class);
    Route::get('delete/{id}', [productController::class, 'destroy']);
    Route::get('edit_product/{id}', [productController::class, 'edit']);
    Route::put('update-product/{id}', [productController::class, 'update']);

    Route::get('admin/view_order/{id}', [OrderController::class, 'view']);
    Route::get('/viewReport', [viewReportController::class, 'index']);
    Route::get('admin/view_order_report/{id}', [viewReportOrdercontroller::class, 'index']);
    Route::get('admin/view_customer_report', [viewReportOrdercontroller::class, 'view_customer_report']);
    Route::get('admin/view_product_report', [viewReportOrdercontroller::class, 'view_product_report']);

    //     Route::get('/update_order_end', function () {
    //       return ('hello word');
    //   });
    Route::put('/update_order_end/{id}', [OrderController::class, 'update']);
// });
