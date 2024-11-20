<div class="page-banner overlay-dark bg-image" style="background-image: url({{ asset($banner) }});">
	<div class="banner-section">
		<div class="container text-center wow fadeInUp">
			<nav aria-label="Breadcrumb">
				<ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
					@foreach ($breadcrumb as $page)
						@if (isset($page['current']) and $page['current'])
							<li class="breadcrumb-item active" aria-current="page">
								{{ $page['name'] }}
							</li>
						@else
							<li class="breadcrumb-item">
								<a href="{{ route($page['route']) }}">{{ $page['name'] }}</a>
							</li>
						@endif
					@endforeach
				</ol>
			</nav>
			<h1 class="font-weight-normal">{{ $title }}</h1>
		</div>
	</div>
</div>
