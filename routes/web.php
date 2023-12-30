<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return "home page";
// });

Route::view('header', '/header');

Route::get('/', [PostController::class,'home_page'] )->name('home_page');

Route::get('/book_review', [PostController::class,'book_review'] )->name('book_review');

Route::get('/view_all', [PostController::class,'view_all'] )->name('view_all');

Route::get('/Login', [PostController::class,'Login_in'] )->name("Login");

Route::get('/sign_up', [PostController::class,'sign_up'] )->name('sign_up');

Route::get('/after_login_home_page', [PostController::class,'after_login_home_page'])->name('after_login_home_page');

Route::get('/after_login_book_review', [PostController::class,'after_login_book_review'])->name('after_login_book_review') ;

Route::get('/after_login_view_all', [PostController::class,'after_login_view_all'] )->name('after_login_view_all');

Route::get('/cart', [PostController::class,'cart'])->name('cart') ;

Route::view('/header', 'header');

Route::view('/view', 'view_all');

// Admin admin panel start

Route::get('/admin/homepage', [AdminController::class, 'home_page'])->name('admin_home_page');

Route::get('/admin/history', [AdminController::class, 'history'])->name('admin_history');

Route::get('/admin/orderstatus', [AdminController::class, 'order_status'])->name('admin_order_status');

Route::get('/admin/addBook', [AdminController::class, 'add_book'])->name('admin_add_book');

Route::get('/admin/editBook', [AdminController::class, 'edit_book'])->name('admin_edit_book');

Route::get('/admin/inventoryStatus', [AdminController::class, 'inventory'])->name('admin_inventory_status');

Route::get('/admin/header', function () {
    return view('admin.admin_header');
});
