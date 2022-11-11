@extends('fontend/fontend_master')


@section('fontend_main')
 <link href="{{asset('public/fontend_asset/user_profile/profile.css')}}" rel="stylesheet">
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{session('user_name')}}</h4>
                      <label for="file-upload" class="btn btn-primary">Upload</label>
                       <div hidden>
                         <input id="file-upload"  type="file"/>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">   
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>

            @php 
              $url=Route::current()->uri;
            @endphp


            <div class="col-md-8">
              <div class="card mb-3">

                <form action="{{route('user.update')}}" method="post">
                  @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Full Name</label>
                      <input type="text" class="form-control @error ('name')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name"  value="{{$user_data->name}}" name="name">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Father Name</label>
                      <input type="text" class="form-control @error ('father_name')is-invalid @enderror" id="exampleInputEmail1" value="{{$user_data->father_name}}" aria-describedby="emailHelp" placeholder="Enter Father Name" name="father_name">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mother Name</label>
                      <input type="text" class="form-control @error ('mother_name')is-invalid @enderror" id="exampleInputEmail1" value="{{$user_data->mother_name}}" aria-describedby="emailHelp" placeholder="Enter Mother Name" name="mother_name">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control @error ('email')is-invalid @enderror" id="exampleInputEmail1" value="{{$user_data->email}}" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" class="form-control @error ('phone_num')is-invalid @enderror" id="exampleInputEmail1" value="{{$user_data->phone_num}}" aria-describedby="emailHelp" placeholder="Enter Phone" name="phone_num">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Present Address</label>
                      <input type="text" class="form-control @error ('present_address')is-invalid @enderror" id="exampleInputEmail1" value="{{$user_data->present_address}}" aria-describedby="emailHelp" placeholder="Enter Present Address" name="present_address">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Permanent Address</label>
                      <input type="text" class="form-control @error ('permanent_address')is-invalid @enderror" id="exampleInputEmail1" value="{{$user_data->permanent_address}}" aria-describedby="emailHelp" placeholder="Enter Permanent Address" name="permanent_address">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nid No</label>
                      <input type="text" class="form-control @error ('nid_no')is-invalid @enderror" id="exampleInputEmail1" value="{{$user_data->nid_no}}" aria-describedby="emailHelp" placeholder="Enter Nid No" name="nid_no">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date of birth</label>
                      <input type="date" class="form-control @error ('date_of_birth')is-invalid @enderror" id="exampleInputEmail1" value="{{$user_data->date_of_birth}}" aria-describedby="emailHelp" placeholder="Enter Date of birth" name="date_of_birth">
                     
                    </div>
                  </div>
                  <br>
                
                  <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-info " target="__blank" type="submit">Update</button>
                    </div>
                  </div>
                </div>
              </div>

            </form>

            



            </div>
          </div>

        </div>
    </div>
@endsection

