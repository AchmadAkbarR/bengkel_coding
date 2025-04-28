<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{url('/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/admin/dist/css/adminlte.min.css')}}">

    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">


            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>

                </ul>


            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar elevation-4 control-sidebar-dark">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <span class="brand-text font-weight-light">Dokter Dashboard</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">

                    <!-- Sidebar Menu -->
                    @include('dokter.component.sidebar')
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">@yield('title')</h1>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        {{-- content --}}

                                        @yield('content')
                                        {{-- end content --}}

                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2025-2026 <a href="https://adminlte.io">AkbarCoding</a>.</strong> All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->


        <script src="{{url('/admin/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{url('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{url('/admin/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{url('/admin/dist/js/demo.js')}}"></script>

        <script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
        <script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    </body>

</html>