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
        $books = Book::get();
        return view('admin.admin_inventory_status',compact('books'));
    }

    public function bkDelete($id){
        Book::where('id',$id)->delete();
        return redirect()->route('admin_inventory_status');
    }

    public function bkEditPage($id){
        $book = Book::where('id',$id)->first();
        return view('admin/admin_edit_book',compact('book'));
    }
    public function edit_book_function(Request $request,$id){
        $data = $this->getBookData($request);
        $bk_id = Book::select('bk_id')->where('id',$id)->get();
        $bk_id = $bk_id->toArray();
        $bk_id= $bk_id['0'];
        $data['bk_id'] = $bk_id['bk_id'];
        Book::where('id',$id)->update($data);
        return redirect()->route('admin_inventory_status');
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


