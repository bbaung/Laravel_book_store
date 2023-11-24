<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function home_page(){
        return view("home_page");
    }

    public function book_review (){
        return view("book_review");
    }

    public function view_all (){
        return view("view_all");
    }

    public function Login_in (){
        return view("Login_in");
    }

    public function sign_up (){
        return view("sign_up");
    }

    public function after_login_home_page (){
        return view("after_login_home_page");
    }

    public function after_login_book_review (){
        return view("after_login_book_review");
    }

    public function after_login_view_all (){
        return view("after_login_view_all");
    }

    public function cart (){
        return view("cart");
    }
}
