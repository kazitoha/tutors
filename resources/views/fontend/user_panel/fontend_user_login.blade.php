@extends('fontend/fontend_master')


@section('fontend_main')



  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="{{asset('public/fontend_asset/login/css/style.css')}}">

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-user-o"></span>
            </div>

            <h3 class="text-center mb-4">Sign In</h3>
            @if($errors->all())
            <div class="card">
              <div class="card-header">
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </div>
                </div>
              </div>
              <br>
            @endif
            <form action="{{route('login.credentials')}}" class="login-form" method="post" novalidate>
              @csrf
              <div class="form-group">
                <input type="text" class="form-control rounded-left @error ('email')is-invalid @enderror" placeholder="Email" name="email" required>
              </div>
              <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left @error ('password')is-invalid @enderror" name="password" placeholder="Password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-info rounded submit px-3">Login</button>
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

