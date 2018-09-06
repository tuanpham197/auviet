<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smart_Book;

class PageController extends Controller
{
    function __construct(){
    	$book = Smart_Book::all();
    	view()->share('book',$book);
    } 

    function trangChu(){
    	return view('pages.trangchu');
    }

    public function index(){
    	echo "Ádas";
    	return view('admin.book.list');
    }
    public function destroy(Request $request){
    	$book = Smart_Book::find($request->category_id);

    	$book->delete();
    	return redirect('admin/book/list')->with('thongbao','Xóa thành công');
    }
}
