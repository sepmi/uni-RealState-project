@extends('master')
@section('content')

@if(Session::has('user_error'))
  <script>
    alert('{{Session::get("user_error")}}');
  </script>
@endif

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{Session::get('message')}}
    </div>
@endif

<!-- carousel -->


  <div class="carousel-inner">
   
   <div class="w-100 banner" >
    <img src="{{ URL::asset('image-realState/banner.png') }}" style=" width:100% "/>
   </div>

 


</div>

<section class="bg-in">
<div class="container d-flex justify-content-center flex-wrap my-5">
    @foreach($houses as $item)

    <a href="/house/{{$item->id}}  class="house card-txt">
        <div class="house card card-products m-3 rounded" >
            <img class="house-image img-fluid rounded-top" src='{{URL::asset("/images/$item->photo")}}' alt="Card image">
            <div class="text-center">
                <h4 class="my-2">{{$item->name}}</h4>
                
                
                
                    
                    <div class="d-flex flex-row mx-auto justify-content-center align-items-center"><span>قیمت: </span><span class="badge text-dark">{{$item->price}}تومان</span></div>
                    <div class="d-flex flex-row mx-auto justify-content-center align-items-center"><span>شهر: </span> <span class="badge text-dark">{{$item->city}}</span></div>
                
                
                
               
            </div>
        </div>
    </a>
    @endforeach
</div>
</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640:{
                slidesPerView:3,
                spaceBetween:20,
            },
            768:{
                slidesPerView:4,
                spaceBetween:30,
            },
            1024:{
                slidesPerView:5,
                spaceBetween:40,
            },
        }
    });
</script>
@endsection
