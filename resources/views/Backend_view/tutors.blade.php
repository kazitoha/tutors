<x-app-layout>



  <div class="app-title">
          <div>
            <h1><i class="fa fa-edit"></i> Tutors</h1>
            <p>Tutors form elements</p>
          </div>
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a> </li>
            <li class="breadcrumb-item active" aria-current="page">Tutors</li>
            <li class="breadcrumb-item active" aria-current="page">Add Tutors</li>
          </ul>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h2 class="text-center text-danger">Add Tutors</h2>
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

              <form action="{{ url('tutors/insert') }}" method="post" enctype="multipart/form-data">
                @csrf

          
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input class="form-control @error ('name')is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">
                </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Father Name</label>
                  <input class="form-control @error ('father_name')is-invalid @enderror" type="text" name="father_name" value="{{ old('father_name') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mother Name</label>
                  <input class="form-control @error ('mother_name')is-invalid @enderror" type="text" name="mother_name" value="{{ old('mother_name') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Present Address</label>
                  <input class="form-control @error ('present_address')is-invalid @enderror" type="text" name="present_address" value="{{ old('present_address') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Permanent Address</label>
                  <input class="form-control @error ('permanent_address')is-invalid @enderror" type="text" name="permanent_address" value="{{ old('permanent_address') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nid No. </label>
                  <input class="form-control @error ('nid_no')is-invalid @enderror" type="number" name="nid_no" value="{{ old('nid_no') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date Of Birth</label>
                  <input class="form-control @error ('date_of_birth')is-invalid @enderror" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gender</label>
                  <select class="form-select @error ('gender')is-invalid @enderror" name="gender" aria-label="Default select example" >
                        <option >Select Gender</option>
                        <option >Male</option>
                        <option >Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Qualification</label>
                  <input class="form-control @error ('qualification')is-invalid @enderror" type="text" name="qualification" value="{{ old('qualification') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Dept</label>
                  <input class="form-control @error ('dept')is-invalid @enderror" type="text" name="dept" value="{{ old('dept') }}">
                </div>  
                <div class="form-group">
                     <label for="formFile" class="form-label">Image</label>
                     <input class="form-control" accept="image/*" type='file' name="file_path" id="imgInp" />
                     <img id="blah" src="#" alt="your image" />
                </div>     

                <button type="submit" class="btn btn-primary">Submit</button>
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
    <script type="text/javascript">
      imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
    </script>
  </x-app-layout>
