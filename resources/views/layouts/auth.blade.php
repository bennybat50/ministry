<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Admin Auth</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/img/fav-icon.png') }}">
    <link rel="icon" href="{{ asset('admin-assets/img/fav-icon.png') }}" type="image/x-icon">
    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin-assets/vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- Data table CSS -->
    <link href="{{ asset('admin-assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('admin-assets/dist/css/style.css') }}" rel="stylesheet" type="text/css">



    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font
  ================================================== -->

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- MAIN STYLE
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />

<body>
    {{-- <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader--> --}}




            <main>
                @include('partials.alert')
                @yield('content')
            </main>


     



    <script src="{{ asset('admin-assets/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin-assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>

    <!-- Bootstrap Daterangepicker JavaScript -->
    <script src="{{ asset('admin-assets/vendors/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('admin-assets/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Form Flie Upload Data JavaScript -->
    <script src="{{ asset('admin-assets/dist/js/form-file-upload-data.js') }}"></script>

    <!-- Data table JavaScript -->
    <script src="{{ asset('admin-assets/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/dist/js/dataTables-data.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('admin-assets/dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Progressbar Animation JavaScript -->
    <script src="{{ asset('admin-assets/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('admin-assets/dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Sparkline JavaScript -->
    <script src="{{ asset('admin-assets/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('admin-assets/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- ChartJS JavaScript -->
    <script src="{{ asset('admin-assets/vendors/chart.js/Chart.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('admin-assets/vendors/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/bower_components/morris.js/morris.min.js') }}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{ asset('admin-assets/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('admin-assets/dist/js/init.js') }}"></script>
    <script src="{{ asset('admin-assets/dist/js/dashboard-data.js') }}"></script>
</body>

</html>
