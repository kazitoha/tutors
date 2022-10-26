<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tutors BD.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

   <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
   <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend_asset/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- 2nd template -->




      <!-- Bootstrap Css -->
      <link href="{{ asset('public/backend_asset/2nd_template/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- Icons Css -->
      <link href="{{ asset('public/backend_asset/2nd_template/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="{{ asset('public/backend_asset/2nd_template/css/app.min.css')}}" rel="stylesheet" type="text/css" />




  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{url('dashboard')}}">Tutors bd.</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      @livewireStyles
      <ul class="app-nav">

        <div class="dropdown show">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="background :none !important;color:#fff;margin-top:7px;">
              Teams Settings
            </a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
              <!-- Team Management -->
              @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                  <div class="border-t border-gray-200"></div>

                  <div class="block px-4 py-2 text-xs text-gray-400">
                      {{ __('Manage Team') }}
                  </div>

                  <!-- Team Settings -->
                  <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                      {{ __('Team Settings') }}
                  </x-jet-responsive-nav-link>

                  @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                      <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                          {{ __('Create New Team') }}
                      </x-jet-responsive-nav-link>
                  @endcan

                  <div class="border-t border-gray-200"></div>

                  <!-- Team Switcher -->
                  <div class="block px-4 py-2 text-xs text-gray-400">
                      {{ __('Switch Teams') }}
                  </div>

                  @foreach (Auth::user()->allTeams() as $team)
                      <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                  @endforeach
              @endif
         </div>

        <li class="dropdown"><a class="app-nav__item" href="" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            
            {{-- rule control --}}
            @can('isAdmin')
            <li><a class="dropdown-item" href="{{ route('rule_control') }}"><i class="fa fa-cogs" aria-hidden="true"></i>Rule Control</a></li>
            @endcan 
            {{-- end rule control --}}

            <li><a class="dropdown-item" href="{{ route('profile.show') }}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                 <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                   this.closest('form').submit();"><i class="fa fa-sign-out fa-lg">
                   </i> Logout</a>
                 </li>
            </form>
          </ul>
        </li>
      </ul>
    </header>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" style="width:50px;height:50px;" src="https://www.pngitem.com/pimgs/b/421-4212680_default-avatar-png.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->name; }}</p>
          @if(Auth::user()->name == "kazi toha")<p class="app-sidebar__user-designation">Developer</p>@endif
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item active" href="{{url('dashboard')}}">
            <i class="app-menu__icon mdi mdi-view-dashboard"></i>
            <span class="app-menu__label">Dashboard</span>
          </a>
        </li>

        <li>
          <a class="app-menu__item " href="{{ url('/') }}" target="_blank">
            <i class="app-menu__icon fa fa-eye"></i>
            <span class="app-menu__label">Visit website</span>
          </a>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon mdi mdi-note-text"></i>
            <span class="app-menu__label">Tutors</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              @can('isCreate')
              <a class="treeview-item" href="{{url('tutors')}}">
                <i class="app-menu__icon fa fa-plus-circle"></i>Add Tutors</a>
              @endcan  
               <a class="treeview-item" href="{{ url('tutors/list') }}">
                <i class="app-menu__icon fa fa-list" aria-hidden="true"></i> Tutors List</a>
            </li>
          </ul>
        </li>

    </aside>

    <main class="app-content">


        {{ $slot }}



    </main>

    @stack('modals')

        @livewireScripts














    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('public/backend_asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/jquery-3.3.1.min.js') }}"></script>


    <script src="{{ asset('public/backend_asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/backend_asset/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('public/backend_asset/js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('public/backend_asset/js/plugins/bootstrap-notify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend_asset/js/plugins/sweetalert.min.js') }}"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('public/backend_asset/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/backend_asset/js/plugins/dataTables.bootstrap.min.js') }}"></script>

    <script>
      document.getElementById("myBtn").addEventListener("click", function() {
      alert("WARNING! This will delete all data. Are you sure ?");
     });
   </script>

    <script type="text/javascript">
    $('#demoNotify').click(function(){
        $.notify({
          title: "Website loading : ",
          message: "Something cool is just updated!",
          icon: 'fa fa-spinner'
        },{
          type: "info"
        });
      });
      $('#demoSwal').click(function(){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: true
        }, function(isConfirm) {
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      });
      </script>
      <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>


    <!-- data table  -->
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>








  </body>
</html>
