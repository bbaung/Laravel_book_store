<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
    public function add_book_function(Request $request){
        $data = $this->getBookData($request);
        Book::create($data);

        return back();
    }

    public function edit_book(){
        return view('admin.admin_edit_book');
    }

    public function inventory(){
        return view('admin.admin_inventory_status');
    }




    // private functions

    private function getBookData($request){
        return [
            'bk_id'=> $request->bookId,
            'bk_name' => $request->bookName,
            'bk_author' => $request->Auther,
            'bk_cati' => $request->category,
            'bk_rel_date'=>$request->releaseDate,
            'bk_price'=>$request->price,
            'bk_quantity'=>$request->quantity
        ];
    }

}


