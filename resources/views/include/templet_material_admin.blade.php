<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="@yield('description')" />
        <meta name="keywords" content="@yield('keywords')" />
        <link rel='stylesheet' type='text/css' href='{{$url}}/bootstrap/css/bootstrap.min.css' />
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='//fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="{{$url}}/assets/css/theme-4/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="{{$url}}/assets/css/theme-4/materialadmin.css" />
		<link type="text/css" rel="stylesheet" href="{{$url}}/assets/css/theme-4/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="{{$url}}/assets/css/theme-4/material-design-iconic-font.min.css" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="{{$url}}/assets/js/libs/utils/html5shiv.js"></script>
		<script type="text/javascript" src="{{$url}}/assets/js/libs/utils/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

	 @yield('content')
	
	
	
	<!-- BEGIN JAVASCRIPT -->
		<script src="{{$url}}/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="{{$url}}/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="{{$url}}/assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="{{$url}}/assets/js/libs/spin.js/spin.min.js"></script>
		<script src="{{$url}}/assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="{{$url}}/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="{{$url}}/assets/js/core/source/App.js"></script>
		<script src="{{$url}}/assets/js/core/source/AppNavigation.js"></script>
		<script src="{{$url}}/assets/js/core/source/AppOffcanvas.js"></script>
		<script src="{{$url}}/assets/js/core/source/AppCard.js"></script>
		<script src="{{$url}}/assets/js/core/source/AppForm.js"></script>
		<script src="{{$url}}/assets/js/core/source/AppNavSearch.js"></script>
		<script src="{{$url}}/assets/js/core/source/AppVendor.js"></script>
		<script src="{{$url}}/assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
