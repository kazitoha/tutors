@extends('fontend/fontend_master')


@section('fontend_main')






<!-- ======home and banner section start welcome_message======= -->
    <section id="Notice-view-banner">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
  <!-- ======home and banner section finish welcome_message======= -->






<!-- ===========all Notice-view-part start==================== -->

<section id="Notice-view-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Notice-view-heading">
                    <h3>Notice Board</h3>
                    <span><a href="{{url('/Notice_all_view')}}">Refresh<i class="fas fa-redo-alt"></i></a></span>
                </div>
            </div>
        </div>
        <div class="row pt-2">
        </div>
        <div class="row pt-3">
           <div class="col-lg-8" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">
             @foreach ($all_notices_show as $all_notices)
                <div class="Notice-box">
                  <div class="Notice-item">
                   <a href="#" target="blank"> <h2>{{$all_notices->title}}</h2></a>
                    <ul>
                      <li class="date-time">Published Date: 
                        @if(!$all_notices->created_at == null){{$all_notices->created_at->format('d-M-Y')}}@endif</li>
                      <li class="Notice-btn-item"><a href="{{url('view_notice')}}/{{$all_notices->id}}" target="blank" class="btn-read">+ read more....</a></li>
                    </ul>
                  </div>
                  <hr>
                </div>
              @endforeach



             <div class="d-flex justify-content-center">
                    <li>{{ $all_notices_show->links("pagination::bootstrap-4") }}</li>

             </div>

            </div>

          


        <div class="col-lg-4">
            <div class="useful-link">
                <h3>USEFUL LINKS</h3>
                <ul>
                   <li><a href="https://dua7c.com/">Formfillup</a></li>
                   <li><a href="https://collegeadmission.eis.du.ac.bd/"> Admission</a></li>
                   <li><a href="https://result.7college.du.ac.bd/"> Result</a></li>
                   <li><a href="https://www.du.ac.bd/">  Dhaka University</a></li>
                   <li><a href="http://www.moedu.gov.bd/"> Ministry of Education</a></li>
                </ul>
            </div>
        </div>
       </div>
      </div>
</section>



@endsection
