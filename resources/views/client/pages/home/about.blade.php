@extends('client.master')
@section('title', 'Về chúng tôi')

@push('styles')
@endpush

@section('content')
	<x-client.sections.page-banner banner='assets/client/img/bg_image_1.jpg' :breadcrumb="$breadcrumb" title='About Us' />

	<div class="page-section bg-light">
		<x-client.partials.services />
	</div>

	<div class="page-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 wow fadeInUp">
					<x-client.partials.welcome />
				</div>
				<div class="col-lg-10 mt-5">
					<x-client.sections.doctors />
				</div>
			</div>
		</div>
	</div>

	<x-client.sections.app-banner />
@endsection


@push('scripts')
	<script></script>
@endpush
