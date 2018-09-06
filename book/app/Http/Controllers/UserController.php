<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
	function getLogin(){
		return view('admin.login');
	}

	function postLogin(Request $request){

		$this->validate($request,[
			'email'    => 'required',
			'password' => 'required|min:8|max:20'
		],
		[
			'email.required'      => 'Bạn không được bỏ trống',
			'password.required'   => 'Bạn không được bỏ trống',
			'password.min'        => 'Mật khẩu quá ngắn',
			'password.max'        => 'Mật khẩu quá dài'
		]);

		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
        	echo $request->email;
			echo $request->password;
            echo "thanh cong";
            return redirect('admin/book/list');
        }
        else
        {
            return redirect('login')->with('thongbao','Đăng nhập không thành công');
        }
	}
	function getLogout(){
		Auth::logout();
		return redirect('admin/login'); 
	}
}
