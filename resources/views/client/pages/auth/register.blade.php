@extends('client.master')
@section('title', 'Đăng Nhập')

@push('styles')
	<style>
	</style>
@endpush

@section('content')
	<div class="page-section my-5">
		<div class="container">
			<h1 class="text-center wow fadeInUp text-uppercase fw-bolder">Register</h1>
			<form class="contact-form mt-5" method="POST" autocomplete="off">
				@csrf
				<div class="row mb-3 d-flex flex-column align-items-center">
					@error('general')
						<div class="col-sm-10 col-md-6 py-2 text-center wow zoomIn">
							<p class="text-danger">{{ $message }}</p>
						</div>
					@enderror
					<div class="col-sm-10 col-md-6 py-2 wow fadeInRight">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"
							placeholder="Full Name...">
						@error('name')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>

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
					<div class="col-sm-10 col-md-6 py-2 wow fadeInLeft">
						<label for="confirm-password">Confirm password</label>
						<input type="password" id="confirm-password" name="confirm_password" class="form-control"
							placeholder="Confirm your password...">
						@error('confirm_password')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
					<div class="col-sm-10 col-md-6 d-flex align-items-baseline py-1 wow fadeInDown user-select-none">
						<input type="checkbox" id="terms" class="mr-2" />
						<label for="terms" class="mb-0">
							I agree to the Terms and Conditions and Privacy Policy.
						</label>
					</div>
				</div>
				<div class="d-flex justify-content-center align-items-center mb-5">
					<button type="submit" class="btn btn-primary wow zoomIn">Register</button>
				</div>
				<div class="d-flex justify-content-center align-items-center mb-5 wow fadeInUp">
					<span>Already have an account?</span>
					<a href="{{ route('login') }}" class="ml-1">Login</a>
				</div>
			</form>
		</div>
	</div>
@endsection


@push('scripts')
	<script></script>
@endpush
