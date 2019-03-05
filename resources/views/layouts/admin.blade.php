<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/minton/dark-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 08:53:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <title>Task Tracker Portal</title>

        <link href="{{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet" />
        
        <link href="{{asset('plugins/jquery-circliful/css/jquery.circliful.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="" class="logo"><i class="mdi mdi-radar"></i> <span>Task Tracker</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">
                    @include('inc/navbar')

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    
                    @include('inc/sidebar')
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        @yield('content')

                     


                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <footer class="footer">
                    &copy;  {{ date('Y')+1 }} <a href="javascript:void(0);">Task Tracker </a>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->


    
        @include('inc/scripts')


    </body>

<!-- Mirrored from coderthemes.com/minton/dark-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 08:54:26 GMT -->
</html>