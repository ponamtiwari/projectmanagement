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
                        <h3>Add Project</h3>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="dashboard_breadcam text-end">
                        <p><a href="index-2.html">Dashboard</a> <i
                           class="fas fa-caret-right"></i>Add Project</p>
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
                           <h5 class="modal-title text_white">Add Project</h5>
                        </div>
                        <div class="modal-body">
                            <form action = "{{url('/')}}/addprojectstore" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                   <input type="text" name="name" class="form-control" placeholder="Project Name" value="{{old('name')}}">
                                   <small id="helpId" class="form-text text-danger">@error('name') {{$message}} @enderror</small>
                                   
                                  </div>
                                <div class="form-group">
                                   <input type="text" name="job_reference" class="form-control" placeholder="Job Reference" value="{{old('job_reference')}}">
                                   <small id="helpId" class="form-text text-danger">@error('job_reference') {{$message}} @enderror</small>
                                </div>

                                <div class="form-group">
                                 <input type="text" name="client" class="form-control" placeholder="Enter your client" value="{{old('client')}}">
                                 <small id="helpId" class="form-text text-danger">@error('client') {{$message}} @enderror</small>
                               </div>

                              <div class="form-group">
                                 <input type="text" name="site_address" class="form-control" placeholder="Site address" value="{{old('site_address')}}">
                                 <small id="helpId" class="form-text text-danger">@error('site_address') {{$message}} @enderror</small>
                             </div>

                            <div class="form-group">
                              <input type="text" name="proposal" class="form-control" placeholder="Proposal" value="{{old('proposal')}}">
                              <small id="helpId" class="form-text text-danger">@error('proposal') {{$message}} @enderror</small>
                            </div>


                            <input type="submit" class="btn_1 full_width text-center" value="Submit" />

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