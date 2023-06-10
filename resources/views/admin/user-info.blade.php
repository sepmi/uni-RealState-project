<?php

use App\Http\Controllers\adminController;

?>
@extends('admin/master')
@section('content')

<div class="bg-admin ">
    <div class="container py-5 ">
       <div class="bg-light rounded py-5">
            <h2 class="text-center display-5 mb-5">مشخصات کاربر</h2>
            <table class="table text-center table-font">
                <tr>
                    <th>نام </th>
                    <td>{{$user->fname}}</td>
                    <td></td>
                    <th>نام خانوادگی </th>
                    <td>{{$user->lname}}</td>
                </tr>

                <tr>
                    <th>ایمیل</th>
                    <td>{{$user->email}}</td>
                </tr>

                <tr>
                    <th >ادمین</th>
                    <td>{{$user->admin}}</td>
                </tr>
            </table>
       </div>
       
    </div>
</div>
@endsection
