<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="app-title">
            <div>
              <h1><i class="fa fa-edit"></i> Dashboard</h1>
              <p>Dashboard form elements</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
            </ul>
    </div>
     </div>

      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-user-management-kiranshastry-lineal-color-kiranshastry-4.png"/>
            <div class="info">
              <h4>Users</h4>
              <p><b>100</b></p>
            </div>
          </div>
        </div>
         {{session('variableName')}}
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><img src="https://img.icons8.com/color/64/000000/noticeboard.png"/>
            <div class="info">
              <h4>Bd Tutors</h4>
              <p><b>200</b></p>
            </div>
          </div>
        </div>
        
      
      </div>



</x-app-layout>
