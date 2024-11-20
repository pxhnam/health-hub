@extends('client.master')
@section('title', 'Trang Chủ')

@push('styles')
	<style>
		@media (min-width: 768px) {
			.custom-index {
				margin-top: -50px;
			}
		}
	</style>
@endpush

@section('content')
	<x-client.sections.banner banner='assets/client/img/bg_image_1.jpg' title='Healthy Living' textButton="Let's Consult"
		link='#' sub="Let's make your life happier" />
	<x-client.sections.health-center />
	<x-client.sections.doctors />
	<x-client.sections.news />
	<x-client.sections.make-appointment />
	<x-client.sections.app-banner />
@endsection


@push('scripts')
	<script></script>
@endpush
