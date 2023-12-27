<?php

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
