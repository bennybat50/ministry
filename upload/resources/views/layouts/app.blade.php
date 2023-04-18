<!DOCTYPE html>

<html class="no-js" lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title> Site Admin</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('admin-assets/img/fav-icon.png') }}">
	<link rel="icon" href="{{ asset('admin-assets/img/fav-icon.png') }}" type="image/x-icon">
    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin-assets/vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>
	<!-- Data table CSS -->
	<link href="{{ asset('admin-assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

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

<body >
    {{-- <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader--> --}}
    <div class="wrapper theme-1-active pimary-color-blue">

         <!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="{{ url('/admin') }}">
							<img class="brand-img" src="{{ asset('admin-assets/img/logo.png') }}" alt="brand" />
						</a>
					</div>
				</div>
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>

			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">




					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">Admin<span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">

							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><div class="pull-left"><i class="fa fa-sign-out  mr-20" aria-hidden="true"></i><span class="right-nav-text">Logout</span></div><div class="clearfix"></div></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
                        @csrf
                    </form>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
                <br>
				<li>
					<a href="{{ url('/admin') }}"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="{{ route('site-items.index') }}"><div class="pull-left"><i class="fa fa-columns mr-20" aria-hidden="true"></i><span class="right-nav-text">Site Manager</span></div><div class="clearfix"></div></a>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="sliders"><div class="pull-left"><i class="fa fa-image mr-20" aria-hidden="true"></i><span class="right-nav-text">Sliders</span></div><div class="clearfix"></div></a>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="fa fa-money mr-20"></i><span class="right-nav-text">Manage Pages </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
                            <a href="{{ route('pages.index') }}">
                                Page List
                            </a>
						</li>
						<li>
							<a  href="{{ route('pages.create') }}">
                                Create Page
                            </a>
						</li>

					</ul>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="/admin/posts"><div class="pull-left"><i class="fa fa-rss mr-20" aria-hidden="true"></i><span class="right-nav-text">Manage Post</span></div><div class="clearfix"></div></a>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="/admin/gallery"><div class="pull-left"><i class="fa fa-image mr-20" aria-hidden="true"></i><span class="right-nav-text">Manage Gallery</span></div><div class="clearfix"></div></a>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="/admin/messages"><div class="pull-left"><i class="fa fa-comment mr-20" aria-hidden="true"></i><span class="right-nav-text">Messages</span></div><div class="clearfix"></div></a>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="/admin/messages?ireport=true"><div class="pull-left"><i class="fa fa-question-circle mr-20" aria-hidden="true"></i><span class="right-nav-text">iReports</span></div><div class="clearfix"></div></a>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="/admin/subscribers"><div class="pull-left"><i class="fa fa-users mr-20" aria-hidden="true"></i><span class="right-nav-text">All Subscribers</span></div><div class="clearfix"></div></a>
				</li>

                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="/admin/users"><div class="pull-left"><i class="fa fa-users mr-20" aria-hidden="true"></i><span class="right-nav-text"> Users</span></div><div class="clearfix"></div></a>
				</li>




                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="/admin/content-libary"><div class="pull-left"><i class="fa fa-folder mr-20" aria-hidden="true"></i><span class="right-nav-text">Contents Libary</span></div><div class="clearfix"></div></a>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
                <li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><div class="pull-left"><i class="fa fa-sign-out  mr-20" aria-hidden="true"></i><span class="right-nav-text">Logout</span></div><div class="clearfix"></div></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
                        @csrf
                    </form>
                </li>


			</ul>
		</div>
		<!-- /Left Sidebar Menu -->



    <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						{{-- <h2 class="txt-dark">{{ $page_title }}</h2> --}}
					</div>

				</div>
				<!-- /Title -->

                <main>
                    @include('partials.alert')
                    @yield('content')
                </main>

				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p><b>2022 &copy;</b> <b>SITE- CONTENT MANAGEMENT SYSTEM</b></p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
			</div>
		</div>
        <!-- /Main Content -->


    </div>
    {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}



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
