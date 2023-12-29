<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function home_page(){
    return view('admin.admin_home_page');
}

    public function order_status(){
        return view('admin.order_status');
    }

}


