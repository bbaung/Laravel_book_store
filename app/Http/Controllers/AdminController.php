<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function home_page(){
    return view('admin.admin_home_page');
}

    public function history(){
        return view('admin.admin_history');
    }

    public function order_status(){
        return view('admin.admin_order_status');
    }

    public function add_book(){
        return view('admin.admin_add_book');
    }

    public function edit_book(){
        return view('admin.admin_edit_book');
    }

    public function inventory(){
        return view('admin.admin_inventory_status');
    }

}


