<div class="col-lg-4 py-2 wow zoomIn">
	<div class="card-blog">
		<div class="header">
			<div class="post-category">
				<a href="#">{{ $tag }}</a>
			</div>
			<a href="blog-details.html" class="post-thumb">
				<img src="{{ asset($thumbnail) }}" alt="">
			</a>
		</div>
		<div class="body">
			<h5 class="post-title"><a href="blog-details.html">{{ $title }}</a></h5>
			<div class="site-info">
				<div class="avatar mr-2">
					<div class="avatar-img">
						<img src="{{ asset($avatar) }}" alt="">
					</div>
					<span>{{ $author }}</span>
				</div>
				<span class="mai-time"></span> {{ $time }}
			</div>
		</div>
	</div>
</div>
