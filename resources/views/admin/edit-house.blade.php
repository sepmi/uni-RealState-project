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
                <div class="wrap d-md-flex flex-row-reverse my-5 shadow">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center login-back">
                        <div class="d-flex justify-content-center flex-column text-white mt-2">
                            <div class="mb-3">
                                <img class="img-fluid rounded w-100"  src='{{URL::asset("images/$house->photo")}}'>                               
                            </div>
                            <div class="d-flex justify-content-center">
                                <strong class="text-second">نام خانه : </strong>
                                <p> {{$house->title}} </p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <strong class="text-second">قیمت  : </strong>
                                <p> {{$house->price}} تومان</p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <strong class="text-second">نوع خانه : </strong>
                                <p> {{$house->type}} </p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <strong class="text-second">شهر: </strong>
                                <p> {{$house->city}} </p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <strong class="text-second">آدرس: </strong>
                                <p> {{$house->address}} </p>
                            </div>

                           


                           
                        </div>
                    </div>
                    <div class="col-lg-6 pl-md-5 form-container p-5 bg-white">
                        <h2 class="display-5 text-center mb-5">ویرایش محصول</h2>
                        <form action="{{route('editHouse',['id'=>$house->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group text-right">
                                <label for="title">ویرایش عنوان</label>
                                <input type="text" class="form-control @error('title') {{'is-invalid'}} @enderror" id="name" name="title" placeholder="عنوان جدید . . .">
                                @error('title')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group text-right">
                                <label for="name">ویرایش نوع خانه</label>
                                <input type="text" class="form-control @error('type') {{'is-invalid'}} @enderror" id="name" name="type" placeholder="نوع خانه . . .">
                                @error('type')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group text-right">
                                <label for="title"> شهر</label>
                                <input type="text" class="form-control @error('city') {{'is-invalid'}} @enderror" id="name" name="city" placeholder="شهر . . .">
                                @error('city')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group text-right">
                                <label for="address">ویرایش آدرس</label>
                                <input type="text" class="form-control @error('address') {{'is-invalid'}} @enderror" id="name" name="address" placeholder="آدرس. . .">
                                @error('address')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>



                            <div class="form-group text-right">
                                <label for="b_pages">ویرایش قیمت</label>
                                <input type="text" class="form-control @error('price') {{'is-invalid'}} @enderror" id="b_pages" name="price" placeholder="تومان">
                                @error('price')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                          

                            {{-- <div class="form-group text-right">
                                <label for="description">ویرایش توضیحات</label>
                                <textarea type="text" class="form-control cmt-box @error('description') {{'is-invalid'}} @enderror" id="description" name="description" placeholder="توضیحات جدید . . ."></textarea>
                                @error('description')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> --}}

                            <div class="form-group text-right">
                                <label for="pic">ویرایش تصویر</label>
                                <input type="file" class="form-control-file @error('image') {{'is-invalid'}} @enderror" id="pic" name="image" accept="image/*">
                                @error('image')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="text-center">
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
