@extends('fontend/fontend_master')


@section('fontend_main')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Tutors Bd</span></h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" style="height:161px;">
          <img src="{{asset('public/fontend_asset/img/hero-img.svg')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <section id="search_tutors" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>SEARCH FOR TUTORS</h2>
        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-12">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
              </div>
              <div class="row">
                
              <div class="form-group mt-3">
                <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
              </div>
              <div class="text-center">
                <button type="submit">search Tutors</button>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>
    


    <!-- ======= Tutors list  ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tutors List</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">


          @for($i=1; $i<=10; $i++)
            


            <div class="col-xl-3 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App {{$i}}</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product {{$i}}</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding {{$i}}</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          


          @endfor
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
   <!-- ======= join tutors  ======= -->
    <section id="join_tutors" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Join Tutors</h2>
        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-12">
            <form action="{{route('tutors/insert')}}" method="post">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control @error ('name')is-invalid @enderror" name="name" value="{{old('name')}}"  placeholder="Enter your Full Name">

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Father Name</label>
                  <input type="text" class="form-control @error ('father_name')is-invalid @enderror" name="father_name" value="{{old('father_name')}}" placeholder="Enter your Father Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mother Name</label>
                  <input type="text" class="form-control @error ('mother_name')is-invalid @enderror" name="mother_name" value="{{old('mother_name')}}"placeholder="Enter your Mother Name">
                </div>
                
                <div class="row">
                <div class="col-md-6 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Email</label>
                   <input type="email" class="form-control @error ('email')is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Enter your Email">
                 </div>
                </div>
                <div class="col-md-6 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Phone Number</label>
                   <input type="number" class="form-control @error ('phone_num')is-invalid @enderror" name="phone_num" value="{{old('phone_num')}}" placeholder="Enter your phone number">
                 </div>
                </div>
                
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nid No.</label>
                  <input type="number" class="form-control @error ('nid_no')is-invalid @enderror" name="nid_no" id="exampleInputPassword1" value="{{old('nid_no')}}" placeholder="Enter your Nid No.">
                </div>
              <div class="row">
                <div class="col-md-4 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Permanent Address</label>
                   <input type="text" class="form-control @error ('permanent_address')is-invalid @enderror" name="permanent_address" value="{{old('permanent_address')}}" placeholder="Enter your Permanent Address">
                 </div>
                </div>
                <div class="col-md-4 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Permanent Thana</label>
                   <input type="text" class="form-control @error ('permanent_thana')is-invalid @enderror" name="permanent_thana" value="{{old('permanent_thana')}}" placeholder="Enter your Permanent Permanent Thana">
                 </div>
                </div>
                <div class="col-md-4 form-group">
                 <div class="col">
                 <label for="exampleInputPassword1">Permanent District</label>
                  <input type="text" class="form-control @error ('permanent_district')is-invalid @enderror" list="datalistOptions" name="permanent_district"  value="{{old('permanent_district')}}" placeholder="Enter your Permanent District">
                  <datalist id="datalistOptions">
                    @foreach($district_names as $value)
                     <option value="{{$value->name}}">
                    @endforeach
                  </datalist>
                 </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-4 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Present Address</label>
                   <input type="text" class="form-control @error ('present_address')is-invalid @enderror" name="present_address" value="{{old('present_address')}}" placeholder="Enter your Present Address">
                 </div>
                </div>
                <div class="col-md-4 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Present Thana</label>
                   <input type="text" class="form-control @error ('present_thana')is-invalid @enderror" name="present_thana" value="{{old('present_thana')}}" placeholder="Enter your Present Thana">
                 </div>
                </div>

                <div class="col-md-4 form-group">
                 <div class="col">
                 <label for="exampleInputPassword1">Present District</label>
                  <input type="text" class="form-control @error ('present_district')is-invalid @enderror" list="datalistOptions" name="present_district" value="{{old('present_district')}}" placeholder="Enter Present District">
                  <datalist id="datalistOptions">
                    @foreach($district_names as $value)
                     <option value="{{$value->name}}">
                    @endforeach
                  </datalist>
                 </div>
                </div>
                
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Gender</label>
                   <input type="text" class="form-control @error ('gender')is-invalid @enderror" name="gender" value="{{old('gender')}}" placeholder="Enter Gender">
                 </div>
                </div>
                <div class="col-md-6 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Date Of Birth</label>
                   <input type="date" class="form-control @error ('date_of_birth')is-invalid @enderror" name="date_of_birth" value="{{old('date_of_birth')}}">
                 </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Qualification</label>
                   <input type="text" class="form-control @error ('qualification')is-invalid @enderror" name="qualification" value="{{old('qualification')}}" placeholder="Enter last qualified degree" >
                 </div>
                </div>
                <div class="col-md-6 form-group">
                 <div class="col">
                   <label for="exampleInputPassword1">Department</label>
                   <input type="Department" class="form-control @error ('dept')is-invalid @enderror" name="dept" value="{{old('dept')}}" placeholder="Enter your Department Name">
                 </div>
                </div>
                
              </div>
           
              <div class="text-center" style="padding: 15px;">
                <button type="submit" class="btn btn-info">Submit</button>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>
  </main>


@endsection
