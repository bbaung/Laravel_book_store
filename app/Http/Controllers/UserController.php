<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    //
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

            return redirect('sign_up')-> withErrors($validate);
        }
        else
         $user = new User;

         $user->username = $request->username;
         $user->email = $request->email;
         $user->phone_number = $request->phone_number;
         $user->password = $request->password;
         $user->address = $request->address;


        $user->save();

        return redirect('/Login');

        //  $user = User::creat([
        //     'username'=>$request->input('username'),
        //     'email'=>$request->input('email'),
        //     'phone_number'=>$request->input('phone_number'),
        //     'password'=>$request->input('password'),
        //     'address'=>$request->input('address')
        // ]);

        // return view('Login');




    }


}
