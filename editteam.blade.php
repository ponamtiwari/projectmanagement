@extends('layouts.frontmaster')
@section('main-content')
<div class="main_content_iner ">
   <div class="container-fluid p-0">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="dashboard_header mb_50">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="dashboard_header_title">
                        <h3>Add Team</h3>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="dashboard_breadcam text-end">
                        <p><a href="index-2.html">Dashboard</a> <i
                           class="fas fa-caret-right"></i>Edit Team</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="white_box mb_30">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                     <div class="modal-content cs_modal">
                        <div class="modal-header theme_bg_1 justify-content-center">
                           <h5 class="modal-title text_white">Edit Team</h5>
                        </div>
                        <div class="modal-body">
                            <form action = "{{url('/')}}/updateteam/{{$users->id}}" method="POST">
                                @csrf
                                <div class="form-group">
                                   <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{$users->name}}">
                                   <small id="helpId" class="form-text text-danger">@error('name') {{$message}} @enderror</small>
                                   
                                  </div>
                                <div class="form-group">
                                   <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{$users->phone}}">
                                   <small id="helpId" class="form-text text-danger">@error('phone') {{$message}} @enderror</small>
                                </div>

                                <div class="form-group">
                                 <input type="text" name="email" class="form-control" placeholder="Enter your email" value="{{$users->email}}">
                                 <small id="helpId" class="form-text text-danger">@error('email') {{$message}} @enderror</small>
                               </div>
                               <div class="form-group">
                                 <input type="text" name="address" class="form-control" placeholder="Enter your Address" value="{{$users->address}}">
                                 <small id="helpId" class="form-text text-danger">@error('address') {{$message}} @enderror</small>
                               </div>

                             


                            <input type="submit" class="btn_1 full_width text-center" value="Update" />

                          </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection