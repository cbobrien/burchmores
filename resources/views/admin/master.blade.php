<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{{ isset($title) ? ucwords(strtolower($title)) . ' | ' : '' }}}Admin | Burchmores</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="/css/admin/bootstrap.min.css" rel="stylesheet">
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> --}}
	<link rel="stylesheet" href="/css/admin/font-awesome/css/font-awesome.min.css">
<!-- 	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css"> -->
	<link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="/css/admin/AdminLTE.min.css">
	<link rel="stylesheet" href="/css/admin/skin-red.css">
	<link rel="stylesheet" href="/css/admin/admin.css">

	<link rel="stylesheet" href="/js/admin/timepicker/bootstrap-timepicker.css">
	<link rel="stylesheet" href="/js/admin/datepicker/datepicker3.css">
</head>
<body class="skin-red">

	<div class="wrapper">
		<header class="main-header">
			<a href="/admin" class="logo">Admin</a>
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li>
							<a href="/">View Site</a>							
						</li>
						<li>
							<a href="/auth/logout">Log out</a>							
						</li>				
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">				
				<ul class="sidebar-menu">					
					<!--<li class="treeview">
						<a href="#">
							<i class="fa fa-dashboard"></i> <span>New Cars</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
		                	<li class=""><a href=""><i class="fa fa-circle-o"></i> List New Cars</a></li>
		                	<li><a href=""><i class="fa fa-circle-o"></i> Add New Car</a></li>
		                	<li class="header">Categories</li>
		                	<li><a href=""><i class="fa fa-circle-o"></i> List Categories</a></li>
		                	<li><a href=""><i class="fa fa-circle-o"></i> Add Category</a></li>
		                	<li class="header">Versions</li>
		                	<li><a href=""><i class="fa fa-circle-o"></i> List Versions</a></li>
		                	<li><a href=""><i class="fa fa-circle-o"></i> Add Version</a></li>
		                	<li class="header">Colours</li>
		                	<li><a href=""><i class="fa fa-circle-o"></i> List Colours</a></li>
		                	<li><a href=""><i class="fa fa-circle-o"></i> Add Colours</a></li>
		              	</ul>						
					</li>				-->	
					<li class="treeview">
						<a href="#">
							<i class="fa fa-info-circle"></i> <span>FAQ</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
              	<li class=""><a href="/admin/faq"><i class="fa fa-circle-o"></i> List FAQs</a></li>
              	<li><a href="/admin/faq/create"><i class="fa fa-circle-o"></i> Add FAQs</a></li>
		        </ul>						
					</li>		
					<li class="treeview">
						<a href="#">
							<i class="fa fa-gavel"></i> <span>Auctions</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
              	<li class=""><a href="/admin/auction"><i class="fa fa-circle-o"></i>List Auctions</a></li>
              	<li><a href="/admin/auction/create"><i class="fa fa-circle-o"></i>Add Auction</a></li>
		        </ul>						
					</li>			
					<li class="treeview">
						<a href="#">
							<i class="fa fa-users"></i> <span>Testimonials</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
              	<li class=""><a href="/admin/testimonial"><i class="fa fa-circle-o"></i>List Testimonials</a></li>
              	<li><a href="/admin/testimonial/create"><i class="fa fa-circle-o"></i>Add Testimonial</a></li>
		        </ul>						
					</li>		
					<li class="treeview">
						<a href="#">
							<i class="fa fa-map-marker"></i> <span>Locations</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
              	<li class=""><a href="/admin/location"><i class="fa fa-circle-o"></i>List Locations</a></li>
              	<li><a href="/admin/location/create"><i class="fa fa-circle-o"></i>Add Location</a></li>
		        </ul>						
					</li>		
							<li class="treeview">
						<a href="#">
							<i class="fa fa-building-o"></i> <span>Cities</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
				<ul class="treeview-menu">
              	<li class=""><a href="/admin/cities"><i class="fa fa-circle-o"></i>List Cities</a></li>
              	<li><a href="/admin/cities/create"><i class="fa fa-circle-o"></i>Add City</a></li>
		        </ul>						
					</li>	
					<li class=""><a href="/admin/enquiries"><i class="fa fa-circle-o"></i>Auction Enquiries</a></li>
              		<li class=""><a href="/admin/finance-enquiries"><i class="fa fa-circle-o"></i>Finance Enquiries</a></li>
		    		<li class=""><a href="/admin/sell-cars"><i class="fa fa-circle-o"></i>Sell Your Car Enquiries</a></li>

		    		<li class=""><a href="/admin/content/home"><i class="fa fa-circle-o"></i>Home Content</a></li>
		    		<li class=""><a href="/admin/content/about-us"><i class="fa fa-circle-o"></i>About Us Content</a></li>
		    		<li class=""><a href="/admin/content/finance-warranties"><i class="fa fa-circle-o"></i>Finance &amp; Warranties Content</a></li>																													
				</ul> 
			</section>
		</aside>

		<div class="content-wrapper">
			@yield('content')
		</div>

	</div>

	<script src="/bower/jquery/dist/jquery.min.js"></script>
	<script src="/bower/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
	<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    {{-- <script src="/plugins/datatables/dataTables.bootstrap.js"></script> --}}
	<script src="/js/admin/slimScroll/jquery.slimScroll.min.js"></script>
	<script src="/js/admin//app.min.js"></script>
	<script src="/css/dist/js/demo.js"></script>

	<script src="/js/admin/datepicker/bootstrap-datepicker.js"></script>
	<script src="/js/admin/timepicker/bootstrap-timepicker.min.js"></script>

	<script src="/js/admin/custom.js"></script>

	@yield('scripts')

</body>
</html>