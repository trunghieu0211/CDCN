<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
   public function getlist()
   {
   	$data = User::paginate(10);
    	return view('back-end.users.list',['data'=>$data]);
   }

   public function getdel($id){
      $user = User::find($id);
      $user->delete();
      return redirect('admin/khachhang')->with('thongbao','Xóa khách hàng thành công!');
   }
}
