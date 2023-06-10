<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    function users(){
        $user_id=Session::get('user')['id'];
        $users=User::where('id','!=',$user_id)->where('is_deleted',false)->get();
        return view('admin/users-management',['users'=>$users]);
    }

    //______________________________________________Users informations and orders
    function users_info($id){
        try{
            $user=User::findOrFail($id);
        }
        catch(\Exception $exception){
            abort(404);
        }
        
        return view('admin/user-info',['user'=>$user ]);
    }

    

    //______________________________________________Remove a User
    function users_remove($id){
        User::where('id',$id)->update(['is_deleted'=>true]);
        

       return redirect()->route('userController.view')->with('success_message','کاربر با موفقیت حذف شد✅');
       
    }    



}
