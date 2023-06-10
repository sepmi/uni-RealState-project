<?php
use Illuminate\Support\Facades\Session;
?>
<header class="myHeader">
  <!------------------ TopBar ------------------>
  <nav class=" navbar navbar-expand-sm bg-dark justify-content-between">
    <!-------- LOGO -------->
    {{-- <a class="navbar-brand" href="{{route('home')}}" title="صفحه ی اصلی"><img src="{{URL::asset('images/backgrounds/eshop_logo.png')}}" alt="لوگوی فروشگاه" class="site-logo"></a> --}}
   
    <!-------- Menu -------->
    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}" title="صفحه ی اصلی"> صفحه‌اصلی <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item ml-2">
                <a class="nav-link drop-link " href="{{route('admin.panel')}}" title=" پنل ادمین">پنل ادمین</a>
            </li>
        </ul>
    </div>
      
     <!-------- Account button -------->
     <ul class="navbar-nav mr-auto">
        <li class="nav-item">          
            <a class="nav-link account mx-2 px-2" href="{{route('logout')}}">خروج <i class="fa-solid fa-right-from-bracket"></i></a>             
        </li>
    </ul>

    <!-------- Navbar toggler -------->
    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars menu-icon"></i>
    </button>
  </nav>
</header>