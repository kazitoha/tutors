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
            <div class="align-items-center justify-content-center">
               <h2>welcome to dashboard</h2>
            </div>
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

