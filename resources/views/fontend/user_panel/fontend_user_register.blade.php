@extends('fontend/fontend_master')


@section('fontend_main')



  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="{{asset('public/fontend_asset/login/css/style.css')}}">

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-7">
          <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-user-o"></span>
            </div>
            <h3 class="text-center mb-4">Sign Up</h3>
            <form action="{{route('user.register.insert')}}" class="login-form" novalidate>
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
              <div class="form-group">
                <label>Full name</label>
                <input type="text" class="form-control rounded-left  @error ('name')is-invalid @enderror" placeholder="Full name" name="name" value="{{old('name')}}" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control rounded-left @error ('email')is-invalid @enderror" placeholder="Email" name="email" value="{{old('email')}}" required>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control rounded-left @error ('phone_num')is-invalid @enderror" placeholder="Phone" name="phone_num" value="{{old('phone_num')}}"  required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control rounded-left @error ('password')is-invalid @enderror" placeholder="Enter Password" name="password" required>
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="text" class="form-control rounded-left @error ('confirm_password')is-invalid @enderror" placeholder="Enter Password Again" name="confirm_password" required>
              </div>

              <div class="form-group">
                <button type="submit" class="form-control btn btn-info ">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="{{asset('public/fontend_asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/fontend_asset/js/popper.js')}}"></script>
  <script src="{{asset('public/fontend_asset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/fontend_asset/js/main.js')}}"></script>
@endsection

