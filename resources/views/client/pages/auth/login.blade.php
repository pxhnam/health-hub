@extends('client.master')
@section('title', 'Đăng Nhập')

@push('styles')
	<style>
	</style>
@endpush

@section('content')
	<div class="page-section my-5">
		<div class="container">
			<h1 class="text-center wow fadeInUp text-uppercase fw-bolder">Login</h1>
			<form class="contact-form mt-5" method="POST" autocomplete="off">
				@csrf
				<div class="row mb-3 d-flex flex-column align-items-center">
					@error('general')
						<div class="col-sm-10 col-md-6 py-2 text-center wow zoomIn">
							<p class="text-danger">{{ $message }}</p>
						</div>
					@enderror
					<div class="col-sm-10 col-md-6 py-2 wow fadeInLeft">
						<label for="email">Email</label>
						<input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}"
							placeholder="Email address...">
						@error('email')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
					<div class="col-sm-10 col-md-6 py-2 wow fadeInRight">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control" placeholder="Your password...">
						@error('password')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
					<div class="col-sm-10 col-md-6 py-1 d-flex justify-content-between wow fadeInDown">
						<div class="user-select-none">
							<input type="checkbox" id="remember-me" name="remember" />
							<label for="remember-me" class="mb-0">Remember me</label>
						</div>
						<a href="#">Forgot password?</a>
					</div>
				</div>
				<div class="d-flex justify-content-center align-items-center mb-5">
					<button type="submit" class="btn btn-primary wow zoomIn">Login</button>
				</div>
				<div class="d-flex justify-content-center align-items-center mb-5 wow fadeInUp">
					<span>Don't have an account?</span>
					<a href="{{ route('register') }}" class="ml-1">Register</a>
				</div>
			</form>
		</div>
	</div>
@endsection


@push('scripts')
	<script></script>
@endpush
