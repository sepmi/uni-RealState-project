<?php

namespace App\Http\Controllers\admin;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    function admin_panel(){
        
        
        $admin=Session::get('user')['fname'];

        return view('admin/admin-panel',[ 'admin'=>$admin ]);
    }

    //__________________________________________ Add ADMIN
    function add_admin(Request $req){
        $admin=Session::get('user')['fname'];

        $req->validate([
            'fname'=>'required | regex:/(^([a-zA-z0-9 آ-ی]+)(\d+)?$)/u ',
            'lname'=>'required | regex:/(^([a-zA-z0-9 آ-ی]+)(\d+)?$)/u ',
            'email'=>'required |unique:users| email',
            'password'=>'required | min:4 | max:8'
        ]);

        $user=new User;
        $user->fname=$req->fname;
        $user->lname=$req->lname;
        $user->email=$req->email;
        $user->admin=1;
        $user->password=Hash::make($req->password);
        $user->save();

        return redirect()->route('addAdmin.view')->with('success','ادمین جدید با موفقیت اضافه شد✅');
        // return redirect()->route('userController.view')->with('success','ادمین جدید با موفقیت اضافه شد✅✅');
    }

  

}
