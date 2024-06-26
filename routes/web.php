<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\CartController as ControllersCartController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\Loginmiddleware;
use App\Http\Controllers\User\Usercontroller;

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

// *BackEnd*
Route::prefix('admin')->group(function () {
    Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('admin');
    Route::get('admin', [AuthController::class, 'index'])->name('auth.admin');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
});
//User
Route::prefix('user')->group(function () {
    Route::get('index', [App\Http\Controllers\Backend\Usercontroller::class, 'index'])->name('user.index')->middleware('admin');
    Route::get('create', [App\Http\Controllers\Backend\Usercontroller::class, 'create'])->name('user.create')->middleware('admin');
});

//Customer
Route::prefix('customer')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('home.index');
    Route::get('/products/{id}', [CustomerController::class, 'product'])->name('productsdetail.productsdetail');
    Route::get('/products', [CustomerController::class, 'products'])->name('products.main');
    Route::get('/blog', [CustomerController::class, 'blog'])->name('blog.blog');
    Route::get('/contact', [CustomerController::class, 'contact'])->name('contact.contact');
});
//Cart
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'viewcart'])->name('view.cart');
    Route::post('/add/{id}', [CartController::class, 'addtocart'])->name('addto.cart');
    Route::delete('/remove/{id}', [CartController::class, 'removeFromCart']);
    Route::delete('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');;

 



});



