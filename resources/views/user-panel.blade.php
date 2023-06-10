<?php

use App\Http\Controllers\productController;
use App\Models\order;

?>
@extends('master')
@section('content')
@if(Session::has('success_message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{Session::get('success_message')}}
    </div>
@endif

@if(Session::has('error_message'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{Session::get('error_message')}}
    </div>
@endif

<div class="d-flex justify-content-between flex-wrap mt-5 mb-5 rounded ">
   <div class="w-75 mx-auto border-left bg-light ">
    <!-- user Info -->
        <div class=" my-5  w-50 mx-auto ">
            <h2 class="text-center display-5 mb-5">مشخصات کاربر</h2>
            <table class="table text-center table-font">
                <tr>
                    <th>نام </th>
                    <td>{{$info->fname}}</td>
                </tr>

                <tr>
                    <th>نام خانوادگی</th>
                    <td>{{$info->lname}}</td>
                </tr>

                <tr>
                    <th>ایمیل</th>
                    <td>{{$info->email}}</td>
                </tr>
            </table>
        </div>

    <!-- Change user Info -->
        <div class=" my-5 brder w-50 mx-auto">
            <h2 class="text-center display-5 my-5">ویرایش مشخصات</h2>
            <div>
                <form action="{{route('edit.userInfo')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('fname') {{'is-invalid'}} @enderror" id="name" name="fname" placeholder="نام جدید . . .">
                        @error('fname')
                            <div id="validationServer03Feedback" class="invalid-feedback text-right">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control @error('lname') {{'is-invalid'}} @enderror" id="name" name="lname" placeholder="نام خانوادگی جدید . . .">
                        @error('lname')
                            <div id="validationServer03Feedback" class="invalid-feedback text-right">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control @error('email') {{'is-invalid'}} @enderror" id="email" name="email" placeholder="ایمیل جدید . . .">
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback text-right">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-eshop">ثبت‌تغییرات</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Change Password -->
        <div class=" my-5 brder w-50 mx-auto">
            <h2 class="text-center display-5 my-5">تغییر رمز عبور</h2>
            <form action="{{route('edit.password')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="password" class="form-control @error('oldpswd') {{'is-invalid'}} @enderror" name="oldpswd" placeholder="رمز قدیمی . . .">
                    @error('oldpswd')
                        <div id="validationServer03Feedback" class="invalid-feedback text-right">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" class="form-control @error('pswd') {{'is-invalid'}} @enderror" name="newpswd" placeholder="رمز جدید . . .">
                    @error('newpswd')
                        <div id="validationServer03Feedback" class="invalid-feedback text-right">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" class="form-control @error('reNewpswd') {{'is-invalid'}} @enderror" name="reNewpswd" placeholder="تکرار رمز جدید . . .">
                    @error('reNewpswd')
                        <div id="validationServer03Feedback" class="invalid-feedback text-right">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-eshop">تغییر رمز عبور</button>
                </div>
            </form>
        </div>

   </div>
   
</div>



@endsection
