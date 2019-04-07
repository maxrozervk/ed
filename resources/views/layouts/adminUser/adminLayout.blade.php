
<!DOCTYPE html>
<html>
<head>
  @include('adminUserView.inc.adminUser.head')
  @yield('headScript')
  <style type="text/css">
    body{
          font-size: 14px;
    }
    h1{font-size: 18px !important;}
    h2{font-size: 17px !important;}
    h3{font-size: 16px !important;}
    h4{font-size: 15px !important;}
    h5{font-size: 14px !important;}
    .content-header {
    padding-left: .5rem;
    padding-right: .5rem;
    padding-top: 10px;
    padding-bottom: 0px;

}
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('adminUserView.inc.adminUser.pageHeader')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('adminUserView.inc.adminUser.sidebar')
  <!-- ./Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('content-header')
      
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  {{-- Footer --}}
  @include('adminUserView.inc.adminUser.footer')
  {{-- ./Footer --}}

  <!-- Control Sidebar -->
  @include('adminUserView.inc.adminUser.controlSidebar')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Body Script  -->
  @include('adminUserView.inc.adminUser.bodyScript')
  @yield('bodyScript')

<!-- ./Body Script  -->

</body>
</html>
