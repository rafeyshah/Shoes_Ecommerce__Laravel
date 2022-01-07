<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/product_page/{id}', [UserController::class, 'product_page'])->name('product_page');
Route::post('/addcart/{id}', [UserController::class, 'addcart']);
Route::get('/showcart', [UserController::class, 'showcart']);
Route::get('/delete/{id}', [UserController::class, 'deletecart']);
Route::post('/order', [UserController::class, 'confirmorder']);

Route::get('/product', [SellerController::class, 'product']);
Route::post('/upload_product', [SellerController::class, 'upload_product']);
Route::get('/delete_product/{id}', [SellerController::class, 'delete_product']);
Route::get('/update_product/{id}', [SellerController::class, 'update_product']);
Route::post('/update_product_save/{id}', [SellerController::class, 'update_product_save']);

Route::get('/show_orders', [SellerController::class, 'show_orders']);
Route::get('/update_status/{id}', [SellerController::class, 'update_status']);

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/send', [ContactController::class, 'sendEmail'])->name('send');
