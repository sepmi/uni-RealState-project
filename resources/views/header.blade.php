<?php

use App\Http\Controllers\productController;
use App\Models\category;
use App\Models\User;
use Illuminate\Support\Facades\Session;
//////////////////////////////////
  // $categories=category::all();

  //Auth
  $admin=false;
  $logged=false;
  if(Session::has('user')){
    $logged=true;
    if(Session::get('user')['admin'])
      $admin=true;
    $username=User::where('id',Session::get('user')['id'])->first()->fname;
  }

?>
<header class="myHeader">

  <!------------------ Menu List ------------------>
  <nav class="navbar navbar-expand-md bg-dark ">

    
    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto p-0 ">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}" title="صفحه ی اصلی"> خانه <span class="sr-only">(current)</span></a>
        </li>

        

        @if($logged)
         

          <li class="nav-item ml-2">
              <a class="nav-link drop-link " href="{{route('user.panel')}}" title="پنل کاربری">پروفایل</a>
          </li>
            @if($admin)
              <li class="nav-item ml-2 ">
                    <a class="nav-link drop-link " href="{{route('admin.panel')}}" title=" پنل ادمین">پنل ادمین</a>
              </li>
            @endif

        @endif


      </ul>
    </div>

    <nav class="navbar navbar-expand-md bg-dark">
      
      <div class="search-container d-flex ">
       
        <!-------- Account button -------->
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                @if(!$logged)
                  <a class="nav-link account mx-2 px-2" href="{{route('login.view')}}">ثبت‌نام | ورود <i class="fas fa-user-alt"></i></a>
                @else
                  <a class="nav-link account mx-2 px-2" href="{{route('logout')}}">خروج <i class="fa-solid fa-right-from-bracket"></i></a>
                @endif
              </li>
          </ul>
      </div>
    </nav>
  </nav>
</header>
<script type="text/javascript">
    $('#search_inp').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type:'get',
            url:"{{URL::to('search-live')}}",
            data:{'search':$value},
            success: function (data){
                $('#content').html(data);
            }
        });
    });
</script>
