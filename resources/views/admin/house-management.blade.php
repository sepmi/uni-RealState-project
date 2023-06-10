@extends('admin/master')
@section('content')

<div class="bg-admin py-5 ">
    <h2 class="text-center bg-white w-75 shadow rounded mx-auto mb-3 py-3">مدیریت محصولات</h2>
    <section class=" product-control-container col-md-10 mx-auto p-0">
        
        <div class="d-flex justify-content-between">
            
            <div class=" product-info-container p-3 bg-secondary" id="product_info_container">
                @foreach($houses as $house)
                    <div class="d-flex justify-content-center row my-3 ">
                        <div class="col-md-10 shadow">
                            <div class="row p-2 bg-light rounded">
                                <div class="col-md-4 mt-1">
                                    <a href="/details/{{$house->id}}">
                                        <img class="img-fluid rounded shadow"  src='{{URL::asset("images/$house->photo")}}'>
                                    </a>
                                </div>
                                <div class="col-md-5 mt-1 d-flex align-items-center justify-content-center flex-column">
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
                                </div>
                                <div class="col-md-3 mt-1 d-flex justify-content-center align-items-center flex-column">
                                    <div>
                                        <a class="btn btn-eshop" href="{{route('edit.view',['id'=>$house->id])}}">ویرایش</a>
                                    </div>
                                    <div class=" mt-4 ">
                                        <a class="btn btn-remove"  href="{{route('remove.house',['id'=>$house->id])}}"  >حذف‌<i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

    <script>
        $('.product-control').on("click",function(){

            $value=$(this).children('input').val();
            $.ajax({
                type:'get',
                url:"{{URL::to('admin/product-control')}}",
                data:{'category':$value},
                success: function(data){
                    $('#product_info_container').html(data);
                }
            });
        });

        $('#search_inp').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type:'get',
            url:"{{URL::to('admin/product-search')}}",
            data:{'search':$value},
            success: function (data){
                $('#product_info_container').html(data);
            }
        });
    });
    </script>
@endsection
