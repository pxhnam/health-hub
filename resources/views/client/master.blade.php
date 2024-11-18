<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') - HealthHub</title>
	<link rel="stylesheet" href="{{ asset('assets/client/css/maicons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/client/vendor/owl-carousel/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/client/vendor/animate/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/client/css/theme.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/client/css/main.css') }}">
	@stack('styles')
</head>

<body>
	<!-- Back to top button -->
	@section('back-to-top')
		<x-client.partials.back-to-top />
	@show

	@section('header')
		<x-client.layouts.header />
	@show

	@yield('content')

	@section('footer')
		<x-client.layouts.footer />
	@show

	<script src="{{ asset('assets/client/js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/client/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/client/vendor/wow/wow.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/theme.js') }}"></script>
	<script src="{{ asset('assets/client/js/main.js') }}"></script>
	@stack('scripts')
</body>

</html>
