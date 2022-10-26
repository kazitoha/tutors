<x-app-layout>



  <div class="app-title">
          <div>
            <h1><i class="fa fa-edit"></i> Notice</h1>
            <p>Notice form elements</p>
          </div>
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a> </li>
            <li class="breadcrumb-item active" aria-current="page">Notice</li>
            <li class="breadcrumb-item active" aria-current="page">Add Notice</li>
          </ul>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center text-danger">Add Notice</h2>
              <hr>

         <!-- showing error -->
            @if ($errors->all())
              <div class="card">
                <div class="card-header">
                  <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  </div>
                </div>
              </div>
            @endif
         <!--end showing error -->

              <form action="{{ url('notice/update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="edit_id" value="{{Crypt::encryptstring($notice_edit_data->id)}}">

                <div class="form-group">
                  <label for="exampleInputEmail1" >Category Name</label>
                  <select class="form-control @error ('category_name') is-invalid
                  @enderror"  name="category_name" required>

                    <option selected disabled >--Select One--</option>
                   <!-- notice category select -->
                    @foreach ($notice_category_show as $notice_category)
                      <option value="{{$notice_category->id}}"{{($notice_category->id == $notice_edit_data->category_id)?'selected':''}} >{{$notice_category->category_name}}</option>
                    @endforeach
                    <!--  -->

                  </select>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Notice date</label>
                  <input type="date" class="form-control @error ('[notice_date]')is-invalid @enderror" name="notice_date" value="{{ $notice_edit_data->notice_date }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Headline</label>
                  <textarea class="form-control @error ('headline')is-invalid @enderror" value=""  name="headline" rows="4"  placeholder="Enter headline">{{$notice_edit_data->headline}}</textarea>
                </div>
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Notice image</label>
                  <img id="blah"  src="{{asset('upload_files/notice_file/'. $notice_edit_data->image)}}" alt="your image" style="width: 200px"; /><br>
                  <input type="file" class="form-control @error ('[notice_image]')is-invalid @enderror" name="notice_image">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Content</label>
                  <textarea class="form-control @error ('notice_content')is-invalid @enderror" name="notice_content" rows="4"  placeholder="Enter notice content">{{$notice_edit_data->notice_content}}</textarea>
                </div>
                <a href="{{url('notice/list')}}" class="btn btn-secondary pull-right">Done</a>
                <button type="submit" class="btn btn-primary" >Update</button>
              </form>
            </div>
          </div>
        </div>

<!-- showing data insert or error alert -->
       @if (session('danger_msg'))
        <div class="col-lg-4">
          <div class="card alert border mt-4 mt-lg-0 p-0 mb-0">
              <div class="card-header bg-soft-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  <h5 class="font-size-16 text-danger my-1">Danger </h5>
              </div>
              <div class="card-body">
                  <div class="text-center">
                      <div class="mb-4">
                          <i class="mdi mdi-alert-outline display-4 text-danger"></i>
                      </div>
                      <h4 class="alert-heading font-18">{{ session('danger_msg') }}</h4>
                  </div>
              </div>
          </div>
        </div>
        @endif


        @if (session('success_msg'))
          <div class="col-lg-4">
            <div class="card alert border p-0 mb-0">
                <div class="card-header bg-soft-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h5 class="font-size-16 text-success my-1">Success</h5>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div class="mb-2">
                            <i class="mdi mdi-checkbox-marked-circle-outline display-4 text-success"></i>
                        </div>
                        <h4 class="alert-heading font-18">{{ session('success_msg') }}</h4>
                   </div>
                </div>
            </div>  
        </div>
      @endif
<!-- end showing data insert or error alert -->
           
      
      </div>
    </div>
  </x-app-layout>
