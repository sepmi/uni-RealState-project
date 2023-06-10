@extends('admin/master')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{Session::get('success')}}
</div>
@endif
    <div class="bg-admin ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex my-5 flex-row-reverse shadow">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center login-back">
                            <img class="img-fluid img-responsive rounded product-image"  src='{{URL::asset("images/backgrounds/Registratioin.png")}}'>
                        </div>
                        <div class="col-lg-6 pl-md-5 form-container p-5 bg-white">
                            <h2 class="display-5 text-center mb-5"> افزودن ادمین </h2>
                            <form action="{{route('addAdmin')}}" method="POST">
                                @csrf
                                <div class="form-group text-right">
                                    <label for="name">نام :</label>
                                    <input type="text" class="form-control @error('fname') {{'is-invalid'}} @enderror" id="name" name="fname" placeholder="حروف انگلیسی و فارسی و اعداد . . ." >
                                    @error('fname')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group text-right">
                                    <label for="name"> نام خانوادگی:</label>
                                    <input type="text" class="form-control @error('lname') {{'is-invalid'}} @enderror" id="name" name="lname" placeholder="حروف انگلیسی و فارسی و اعداد . . ." >
                                    @error('lname')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group text-right">
                                    <label for="email">ایمیل :</label>
                                    <input type="text" class="form-control @error('email') {{'is-invalid'}} @enderror" id="email" name="email">
                                    @error('email')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group text-right">
                                    <label for="pwd">رمز عبور :</label>
                                    <input type="password" class="form-control @error('password') {{'is-invalid'}} @enderror" id="pwd" name="password" placeholder="بین 4 تا 8 کارکتر . . .">
                                    @error('password')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-center text-center">
                                    <button type="submit" class="btn btn-eshop px-5">ثبت</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
