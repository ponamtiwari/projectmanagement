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
                        <h3>Team List</h3>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="dashboard_breadcam text-end">
                        <p><a href="index-2.html">Dashboard</a> <i
                           class="fas fa-caret-right"></i>Add Team</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
               <div class="white_card_header">
                  <div class="box_header m-0">
                     <div class="main-title">
                     </div>
                  </div>
               </div>
               <div class="white_card_body">
                  <div class="QA_section">
                     <div class="white_box_tittle list_header">
                        <h4>Table</h4>
                     
                           <div class="add_button ms-2">
                              <a href="{{url('/addproject')}}" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
                           </div>
                        </div>
                     </div>
                     <div class="QA_table mb_30">
                        <table class="table lms_table_active ">
                           <thead>
                              <tr>
                                 <th scope="col">Sr. No</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Job Reference</th>
                                 <th scope="col">Client</th>
                                 <th scope="col">Site Address</th>
                                 <th scope="col">Proposal</th>
                                 <th scope="col">Assigned to</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @php
                                  $i=0;
                              @endphp
                              @foreach($users as $user )
                              <tr>
                                 <th scope="row"> <a href="#" class="question_content"> {{++$i}}</a></th>
                                 <td><a href="{{url('/')}}/project/{{$user->id}}">{{$user->name}}</a></td>
                                 <td>{{$user->email}}</td>
                                 <td>{{$user->phone}}</td>
                                 <td>{{$user->address}}</td>
                                 <td>{{$user->city}}</td>
                                 <td>
                                    @if ($user->status == 0)
                                    <a href="#" class="status_btn bg-danger">Inactive</a>
                                    @else
                                    <a href="#" class="status_btn">Active</a>
                                        
                                    @endif
                                 </td>
                                 <td>
                                    <a href="{{url('/')}}/editteam/{{$user->id}}" class="btn btn-success">Edit</a>
                                    <a href="{{url('/')}}/project/{{$user->id}}" class="btn btn-warning">View</a>
                                    <a href="{{url('/')}}/deleteteam/{{$user->id}}" class="btn btn-danger">delete</a>
                                 </td>
                              </tr>
                             @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection