<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin </title>
  <base href="{{ asset('') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input style="border-radius: 25rem; border: 1px solid white" class="form-control form-control-navbar" type="search" placeholder="Search ..." aria-label="Search">
        <div class="input-group-append">
          <button style="border-radius: 25rem; border: 1px solid white" class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index') }}" class="brand-link">
      <img src="front/image/logo.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="background: rgb(236, 228, 228); ">
      <span class="brand-text font-weight-light" ><b>Beauty Spa</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image_avatar" >
          @if (is_null(Auth::user()->avata))
          <img style="width: 50px; height: 40px; border-radius: 50%;" src="{{ asset('sources/img/userinfo/avatar.jpg') }}">
          @else
          <img style="width: 50px; height: 40px; border-radius: 50%;" src="{{ asset(Auth::user()->avata) }}">
          @endif
      </div>
        <div class="info">
          <a href="{{ route('userinfo') }}" class="d-block" style="float: left; margin-right: 10px; ">{{ Auth::user()->name }}</a>
          
          <p style="float: left; margin-right: 10px; color: #007bff">|</p>
          <a href="{{ route('logout') }}" title="Đăng xuất" >Đăng xuất</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('indexdashboard') }}" class="nav-link">
              <i style="margin-left: 6px" class="fas fa-tachometer-alt"></i>
              <p style="margin-left: 6px">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('indexcategory') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý Danh Mục
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexproduct') }}" class="nav-link">
              <i style="margin-left: 6px" class="fa fa-cubes" aria-hidden="true"></i>
              <p style="margin-left: 8px">
                Quản lý Sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexservice') }}" class="nav-link">
              <i style="margin-left: 6px" class="fa fa-cubes" aria-hidden="true"></i>
              <p style="margin-left: 8px">
                Quản lý Dịch vụ
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i style="margin-left: 7px" class="fa fa-percent" aria-hidden="true"></i>
              <p style="margin-left: 10px">
                Quản lý Khuyến mại
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('indexnewssale') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý Tin tức khuyến mãi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('indexcoupon') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý Coupon</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexorder') }}" class="nav-link">
              <i style="margin-left: 4px" class="fa fa-shopping-cart" aria-hidden="true"></i>
              <p style="margin-left: 8px">
                Quản lý Đơn hàng
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexbook') }}" class="nav-link">
              <i style="margin-left: 4px" class="fa fa-calendar-check-o" aria-hidden="true"></i>
              <p style="margin-left: 8px">
                Quản lý Lịch hẹn
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexrevenue') }}" class="nav-link">
              <i style="margin-left: 4px" class="fa fa-money" aria-hidden="true"></i>
              <p style="margin-left: 6px">
                Quản lý Danh thu
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexnews') }}" class="nav-link">
              <i style="margin-left: 3px" class="nav-icon fas fa-edit"></i>
              <p >
                Quản lý Tin tức
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexcontact') }}" class="nav-link">
              <i style="margin-left: 4px" class="fa fa-envelope" aria-hidden="true"></i>
              <p style="margin-left: 8px">
                Quản lý Liên hệ 
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-header" style="padding-top: 5px; color: #007bff">Quản lý Website</li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexintro') }}" class="nav-link">
              <i style="margin-left: 3px" class="nav-icon fas fa-edit"></i>
              <p >
                Giới thiệu
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexbanner') }}" class="nav-link">
              <i style="margin-left: 4px" class="fa fa-picture-o" aria-hidden="true"></i>
              <p style="margin-left: 10px">
                Banner
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexuser') }}" class="nav-link">
              <i style="margin-left: 4px" class="fa fa-user" aria-hidden="true"></i>
              <p style="margin-left: 10px" >
                Quản lý Người dùng
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('indexrole') }}" class="nav-link">
              <i style="margin-left: 4px" class="fa fa-info-circle" aria-hidden="true"></i>
              <p style="margin-left: 10px">
                Phân quyền 
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-bottom: 20px">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" >
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
