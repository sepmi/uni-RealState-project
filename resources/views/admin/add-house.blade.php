@extends('admin/master')
@section('content')
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex flex-row-reverse my-5 shadow">
                            <div class="col-lg-6 d-flex justify-content-center align-items-center login-back">
                                <img class="img-fluid img-responsive rounded product-image login-img"  src='{{URL::asset("images/admin/addProduct.png")}}'>
                            </div>
                            <div class="col-lg-6 pl-md-5 form-container p-5">
                                <h2 class="display-5 text-center mb-5">افزودن خانه جدید</h2>
                                <form action="{{route('addHouse')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group text-right">
                                        <label for="title">نام خانه </label>
                                        <input type="text" class="form-control @error('title') {{'is-invalid'}} @enderror" id="name" name="title">
                                        @error('title')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="b_pages">قیمت</label>
                                        <input type="text" class="form-control @error('price') {{'is-invalid'}} @enderror" id="b_pages" name="price" placeholder="تومان">
                                        @error('price')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="name">آدرس</label>
                                        <input type="text" class="form-control @error('address') {{'is-invalid'}} @enderror" id="name" name="address">
                                        @error('address')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="name">نوع خانه(اجاره/فروش)</label>
                                        <input type="text" class="form-control @error('type') {{'is-invalid'}} @enderror" id="name" name="type">
                                        @error('type')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group text-right">
                                        <label for="name">شهر</label>
                                        <input type="text" class="form-control @error('city') {{'is-invalid'}} @enderror" id="name" name="city">
                                        @error('city')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    
                                    {{-- <div class="form-group text-right">
                                        <label for="description">توضیحات</label>
                                        <textarea type="text" class="form-control cmt-box @error('description') {{'is-invalid'}} @enderror" id="description" name="description" ></textarea>
                                        @error('description')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div> --}}

                                    <div class="form-group text-right">
                                        <label for="pic">تصویر خانه </label>
                                        <input type="file" class="form-control-file @error('image') {{'is-invalid'}} @enderror" id="pic" name="image" accept="image/*">
                                        @error('image')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-eshop px-5">افزودن</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
