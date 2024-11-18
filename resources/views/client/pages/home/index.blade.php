@extends('client.master')
@section('title', 'Trang Chủ')

@push('styles')
@endpush

@section('content')

	<x-client.partials.banner :banner="asset('assets/client/img/bg_image_1.jpg')" sub="Let's make your life happier" title='Healthy Living'
		textButton="Let's Consult" link='#' />



	<div class="bg-light">
		<x-client.partials.services />
		<x-client.partials.welcome />
	</div>

	<x-client.sections.doctors />


	<div class="page-section bg-light">
		<div class="container">
			<h1 class="text-center wow fadeInUp">Latest News</h1>
			<div class="row mt-5">
				<div class="col-lg-4 py-2 wow zoomIn">
					<div class="card-blog">
						<div class="header">
							<div class="post-category">
								<a href="#">Covid19</a>
							</div>
							<a href="blog-details.html" class="post-thumb">
								<img src="{{ asset('assets/client/img/blog/blog_1.jpg') }}" alt="">
							</a>
						</div>
						<div class="body">
							<h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
							<div class="site-info">
								<div class="avatar mr-2">
									<div class="avatar-img">
										<img src="{{ asset('assets/client/img/person/person_1.jpg') }}" alt="">
									</div>
									<span>Roger Adams</span>
								</div>
								<span class="mai-time"></span> 1 week ago
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 py-2 wow zoomIn">
					<div class="card-blog">
						<div class="header">
							<div class="post-category">
								<a href="#">Covid19</a>
							</div>
							<a href="blog-details.html" class="post-thumb">
								<img src="{{ asset('assets/client/img/blog/blog_2.jpg') }}" alt="">
							</a>
						</div>
						<div class="body">
							<h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
							<div class="site-info">
								<div class="avatar mr-2">
									<div class="avatar-img">
										<img src="{{ asset('assets/client/img/person/person_1.jpg') }}" alt="">
									</div>
									<span>Roger Adams</span>
								</div>
								<span class="mai-time"></span> 4 weeks ago
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 py-2 wow zoomIn">
					<div class="card-blog">
						<div class="header">
							<div class="post-category">
								<a href="#">Covid19</a>
							</div>
							<a href="blog-details.html" class="post-thumb">
								<img src="{{ asset('assets/client/img/blog/blog_3.jpg') }}" alt="">
							</a>
						</div>
						<div class="body">
							<h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
							<div class="site-info">
								<div class="avatar mr-2">
									<div class="avatar-img">
										<img src="{{ asset('assets/client/img/person/person_2.jpg') }}" alt="">
									</div>
									<span>Diego Simmons</span>
								</div>
								<span class="mai-time"></span> 2 months ago
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 text-center mt-4 wow zoomIn">
					<a href="blog.html" class="btn btn-primary">Read More</a>
				</div>

			</div>
		</div>
	</div> <!-- .page-section -->

	<div class="page-section">
		<div class="container">
			<h1 class="text-center wow fadeInUp">Make an Appointment</h1>

			<form class="main-form">
				<div class="row mt-5 ">
					<div class="col-12 col-sm-6 py-2 wow fadeInLeft">
						<input type="text" class="form-control" placeholder="Full name">
					</div>
					<div class="col-12 col-sm-6 py-2 wow fadeInRight">
						<input type="text" class="form-control" placeholder="Email address..">
					</div>
					<div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
						<input type="date" class="form-control">
					</div>
					<div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
						<select name="departement" id="departement" class="custom-select">
							<option value="general">General Health</option>
							<option value="cardiology">Cardiology</option>
							<option value="dental">Dental</option>
							<option value="neurology">Neurology</option>
							<option value="orthopaedics">Orthopaedics</option>
						</select>
					</div>
					<div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
						<input type="text" class="form-control" placeholder="Number..">
					</div>
					<div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
						<textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
					</div>
				</div>

				<button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
			</form>
		</div>
	</div> <!-- .page-section -->

	<div class="page-section banner-home bg-image"
		style="background-image: url({{ asset('assets/client/img/banner-pattern.svg') }});">
		<div class="container py-5 py-lg-0">
			<div class="row align-items-center">
				<div class="col-lg-4 wow zoomIn">
					<div class="img-banner d-none d-lg-block">
						<img src="../assets/img/mobile_app.png" alt="">
					</div>
				</div>
				<div class="col-lg-8 wow fadeInRight">
					<h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
					<a href="#"><img src="{{ asset('assets/client/img/google_play.svg') }}" alt=""></a>
					<a href="#" class="ml-2"><img src="{{ asset('assets/client/img/app_store.svg') }}" alt=""></a>
				</div>
			</div>
		</div>
	</div> <!-- .banner-home -->
@endsection


@push('scripts')
@endpush
