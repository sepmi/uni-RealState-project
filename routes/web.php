<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\adminHouseController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\houseController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;



Route::get('/',[houseController::class,'index'])->name('home');
Route::get('/house/{id}',[houseController::class,'showHouse'])->name('house');




//_______________________________ Only users who are not logged in
Route::group(['middleware'=>'user.error'],function (){
    Route::get('/login',function(){return view('login');})->name('login.view');
    Route::post('/login',[userController::class,'login'])->name('login');
    Route::get('/register',function(){return view('register');})->name('register.view');
    Route::post('/register',[userController::class,'register'])->name('register');
});



//_______________________________ Logged users
Route::group(['middleware'=>'user.auth'],function (){
    Route::controller(userController::class)->group(function(){
        Route::get('/logout','logout')->name('logout');
        Route::post('/user-edit','edit_user_info')->name('edit.userInfo');
        Route::post('/password-edit','edit_password')->name('edit.password');      
        Route::get('user-panel','user_panel')->name("user.panel");
    });
});



//_______________________________ Admin
Route::group(['prefix'=>'admin','middleware'=>'admin.auth'],function (){

    Route::controller(adminController::class)->group(function(){
        Route::get('/admin-panel','admin_panel')->name('admin.panel');
        Route::post('/add-admin','add_admin')->name('addAdmin');
    });

    Route::controller(AdminUserController::class)->group(function(){
        Route::get('/users','users')->name('userController.view');
        Route::get('/users-info/{id}','users_info')->name('userInfo.view');
        Route::get('/users-remove/{id}','users_remove')->name('user.remove');
        Route::get('/orders','order_view')->name('orders.view');
    });

    Route::get('/add-admin',function(){return view('admin/add-admin');})->name('addAdmin.view');

    Route::controller(adminHouseController::class)->group(function(){
        Route::get('/house-management','house_management')->name('house.management');
        Route::get('/edit-house/{id}','edit_house_view')->name('edit.view');
        Route::post('/edit-house/{id}','edit_house')->name('editHouse');
        Route::get('/remove-house/{id}','remove_house')->name('remove.house');
        Route::get('/add-house','add_house_view')->name('addHouse.view');
        Route::post('/add-House','add_House')->name('addHouse');

    });

});