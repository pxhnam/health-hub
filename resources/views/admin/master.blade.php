<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') - HealthHub</title>
	<!-- Fonts and icons -->
	<script src="{{ asset('assets/admin/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {
				families: ["Public Sans:300,400,500,600,700"]
			},
			custom: {
				families: [
					"Font Awesome 5 Solid",
					"Font Awesome 5 Regular",
					"Font Awesome 5 Brands",
					"simple-line-icons",
				],
				urls: ["{{ asset('assets/admin/css/fonts.min.css') }}   "],
			},
			active: function() {
				sessionStorage.fonts = true;
			},
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/admin/css/plugins.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/admin/css/kaiadmin.min.css') }}" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css') }}" />
	@stack('styles')
</head>

<body>
	<div class="wrapper">
		@section('sidebar')
			<x-admin.layouts.sidebar />
		@show
		<div class="main-panel">
			@section('header')
				<x-admin.layouts.header />
			@show

			<div class="container">
				<div class="page-inner">
					@yield('content')
				</div>
			</div>


			@section('footer')
				<x-admin.layouts.footer />
			@show
		</div>
	</div>

	<!--   Core JS Files   -->
	<script src="{{ asset('assets/admin/js/core/jquery-3.7.1.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

	<!-- Chart JS -->
	<script src="{{ asset('assets/admin/js/plugin/chart.js/chart.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Chart Circle -->
	<script src="{{ asset('assets/admin/js/plugin/chart-circle/circles.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ asset('assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ asset('assets/admin/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/plugin/jsvectormap/world.js') }}"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('assets/admin/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Kaiadmin JS -->
	<script src="{{ asset('assets/admin/js/kaiadmin.min.js') }}"></script>

	<!-- Kaiadmin DEMO methods, don't include it in your project! -->
	<script src="{{ asset('assets/admin/js/setting-demo.js') }}"></script>
	<script src="{{ asset('assets/admin/js/demo.js') }}"></script>
	<script>
		$("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
			type: "line",
			height: "70",
			width: "100%",
			lineWidth: "2",
			lineColor: "#177dff",
			fillColor: "rgba(23, 125, 255, 0.14)",
		});

		$("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
			type: "line",
			height: "70",
			width: "100%",
			lineWidth: "2",
			lineColor: "#f3545d",
			fillColor: "rgba(243, 84, 93, .14)",
		});

		$("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: "line",
			height: "70",
			width: "100%",
			lineWidth: "2",
			lineColor: "#ffa534",
			fillColor: "rgba(255, 165, 52, .14)",
		});
	</script>
	@stack('scripts')
</body>

</html>
