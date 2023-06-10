@extends('master')
@section('content')


    <div class="bg-admin ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8">
                <div class="wrap d-md-flex flex-row-reverse my-5 shadow house-show">
                    <div class="col-lg-8 mx-auto d-flex justify-content-center align-items-center ">
                        <div class="d-flex justify-content-center flex-column text-white mt-2 ">
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
                    
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
