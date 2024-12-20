<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <title>{{config('app.name')}}</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
  <!-- Custom CSS -->
  <link href="{{ asset('admin_assets/css/style.min.css') }}" rel="stylesheet">
  <!-- slim select -->
  <link rel="stylesheet" href="{{ asset('admin_assets/plugins/slim-select/slimselect.min.css') }}">

  <script src="https://kit.fontawesome.com/350a2e8a4a.js" crossorigin="anonymous"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

  <?php
  $bg = asset('logos/no.jpg');
  ?>
  <style>
    .btn {
      margin: 2.5px;
    }



    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6],
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] {
      background: #d9c287;
    }

    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul,
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul {
      background: #d9c287;
    }

    #main-wrapper[data-layout=horizontal] .topbar .top-navbar .navbar-header[data-logobg=skin6],
    #main-wrapper[data-layout=vertical] .topbar .top-navbar .navbar-header[data-logobg=skin6] {
      background: #d9c287;
    }

    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link,
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link {
      color: #060f7d;
    }

    .topbar {
      position: relative;
      z-index: 50;
      -webkit-box-shadow: 1px 0px 7px rgba(0, 0, 0, 0.05);
      box-shadow: 1px 0px 7px rgba(0, 0, 0, 0.05);
      background: -webkit-gradient(linear, left top, right top, from(#d9c287), to(#d9c287));
      background: -webkit-linear-gradient(left, #d9c287 0%, #d9c287 100%);
      background: -o-linear-gradient(left, #d9c287 0%, #d9c287 100%);
      background: linear-gradient(to right, #d9c287 0%, #d9c287 100%);
      height: 70px;
    }

    .page-wrapper {
      background: url('{{$bg}}') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-color: rgba(217, 194, 135, 0.3);
      position: relative;
    }

    .sidebar-nav ul .sidebar-item .sidebar-link .hide-menu {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;

      font-weight: 500;
    }

    #main-wrapper[data-layout=horizontal] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link:hover,
    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link:hover {

      color: #ffff;
    }
  </style>
  @yield('styles')
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand justify-content-center" href="{{route('admin.home')}}">
            <!-- Logo icon -->
            <b class="logo-icon">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->

              <img src="{{ asset('logos/main.png') }}" class="dark-logo" width="158px" alt="{{config('app.name')}}" style="width: 45%; border-radius: 25px;">


            </b>
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background-color: #d9c287 !important;" data-navbarbg="skin5">
          <ul class="navbar-nav d-none d-md-block d-lg-none">
            <li class="nav-item">
              <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav mr-auto mt-md-0 ">
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->

            <li class="nav-item hidden-sm-down">

            </li>
          </ul>

          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav">
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{-- <img src="{{ asset('admin_assets/images/users/1.jpg') }}" alt="user" class="profile-pic mr-2"> --}}
                {{ Auth()->user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0)" onclick="$('#logout-form').submit();" class="dropdown-item">
                  <i class="fa fa-sign-out-alt mr-3"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    @include('partial.admin.sidebar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="min-height:100vh;">

      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">

        @if(Session::has('status-success'))
        <div class="alert alert-success">
          {{Session::get('status-success')}}
        </div>
        @endif

        @if(Session::has('success'))
        <div class="alert alert-success">
          {{Session::get('success')}}
        </div>
        @endif

        @if(Session::has('status-info'))
        <div class="alert alert-info">
          {{Session::get('status-info')}}
        </div>
        @endif

        @if(Session::has('status-warning'))
        <div class="alert alert-warning">
          {{Session::get('status-warning')}}
        </div>
        @endif

        @if(Session::has('status-danger'))
        <div class="alert alert-danger">
          {{Session::get('status-danger')}}
        </div>
        @endif

        @yield('content')

        <form action="{{ route('logout') }}" method="POST" id="logout-form">
          @csrf
        </form>

      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="text-center">
        © <?php echo  date('Y'); ?> {{ config('app.name') }}
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="{{ asset('admin_assets/plugins/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{ asset('admin_assets/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('admin_assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/app-style-switcher.js') }}"></script>
  <!--Wave Effects -->
  <script src="{{ asset('admin_assets/js/waves.js') }}"></script>
  <!--Menu sidebar -->
  <script src="{{ asset('admin_assets/js/sidebarmenu.js') }}"></script>
  <!--Custom JavaScript -->
  <script src="{{ asset('admin_assets/js/custom.js') }}"></script>
  <!--This page JavaScript -->
  <!--flot chart-->
  <script src="{{ asset('admin_assets/plugins/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('admin_assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/pages/dashboards/dashboard1.js') }}"></script>

  <!-- slim-select -->
  <script src="{{ asset('admin_assets/plugins/slim-select/slimselect.min.js') }}"></script>


  @yield('scripts')
</body>

</html>