<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
    public function store(Request $request){
        $validate = Validator::make($request->all(),[
            'email' => [
                'required',
                'email',
                'regex:/^[a-zA-Z0-9_.+-]+@.*\.com$/i',
            ],
            'password' => 'required|min:6'
        ], [
            'email.regex' => 'The email must be in a valid format with @ and end with .com',
        ]);
        
        if($validate->fails()){
            return redirect('Login')-> withErrors($validate);
        }
        else   
        header("Location: /after_login_home_page");
        exit();
    }
    
}
