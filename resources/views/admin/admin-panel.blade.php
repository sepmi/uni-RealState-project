@extends('admin/master')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{Session::get('success')}}
        </div>
    @endif
    <div class="bg-admin py-5 ">
        <div class=" mb-5 admin-panel-info d-flex justify-content-around flex-wrap ">

         

            <div class="admin-download-info-bg mb-5 mx-3">
                <div class="text-center admin-info-cnt d-flex align-items-center justify-content-center flex-column">
                    <strong>ADMIN</strong>
                    <div class=" d-flex justify-content-center">
                        <p class="text-center d-flex align-items-center justify-content-center">{{$admin}}</p>
                    </div>
                </div>
            </div>

           

        </div>

       <section class="admin-panel container p-3">
           <h2 class="text-center bg-white py-3 rounded shadow">پنل ادمین</h2>
           <div class="d-flex flex-wrap justify-content-center">
               <!-- user Controller -->
               <div class="mx-4">
                   <a href="{{route('userController.view')}}" class="text-dark">
                       <div class="bg-white shadow my-3 panel-option">
                           <div class="panel-img">
                               <img src="{{URL::asset('images/admin/user-control.png')}}" alt="user-manager" class="img-fluid">
                           </div>
                           <div>
                               <p class="text-center py-2">مدیریت کاربران</p>
                           </div>
                       </div>
                   </a>
               </div>

               <!-- product Controller -->
               <div class="mx-4">
                   <a href="{{route('house.management')}}" class="text-dark">
                       <div class="bg-white shadow my-3 panel-option">
                           <div class="panel-img">
                               <img src="{{URL::asset('images/admin/product-manage.png')}}" alt="houses-manager" class="img-fluid">
                           </div>
                           <div>
                               <p class="text-center py-2">مدیریت خانه‌ها</p>
                           </div>
                       </div>
                   </a>
               </div>

              

              

               <!-- admin Controller -->
               <div class="mx-4">
                   <a href="{{route('addAdmin.view')}}" class="text-dark">
                       <div class="bg-white shadow my-3 panel-option">
                           <div class="panel-img">
                               <img src="{{URL::asset('images/admin/add-admin.png')}}" alt="admin-manager" class="img-fluid">
                           </div>
                           <div>
                               <p class="text-center py-2">افزودن ادمین</p>
                           </div>
                       </div>
                   </a>
               </div>

               <!-- add.product Controller -->
               <div class="mx-4">
                   <a href="{{route('addHouse.view')}}" class="text-dark">
                       <div class="bg-white shadow my-3 panel-option">
                           <div class="panel-img">
                               <img src="{{URL::asset('images/admin/admin-add-product.png')}}" alt="productadd-manager" class="img-fluid">
                           </div>
                           <div>
                               <p class="text-center py-2">افزودن خانه</p>
                           </div>
                       </div>
                   </a>
               </div>

           </div>
       </section>




    </div>

@endsection
