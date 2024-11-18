<header>
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 text-sm">
					<div class="site-info">
						<a href="#"><span class="mai-call text-primary"></span> {{ $phoneNumber }}</a>
						<span class="divider">|</span>
						<a href="#"><span class="mai-mail text-primary"></span> {{ $email }}</a>
					</div>
				</div>
				<div class="col-sm-4 text-right text-sm">
					<div class="social-mini-button">
						@foreach ($contacts as $contact)
							<a href="{{ $contact['link'] }}">
								<span class="{{ $contact['icon'] }}">
								</span>
							</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="/"><span class="text-primary">One</span>-Health</a>

			<form action="#">
				<div class="input-group input-navbar">
					<div class="input-group-prepend">
						<span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
					</div>
					<input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
						aria-describedby="icon-addon1">
				</div>
			</form>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
				aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupport">
				<ul class="navbar-nav ml-auto">
					@foreach ($menu as $item)
						<li @class(['nav-item', 'active' => Route::is($item['route'])])>
							<a class="nav-link" href="{{ route($item['route']) }}">{{ $item['name'] }}</a>
						</li>
					@endforeach

					<li class="nav-item">
						<a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login / Register</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
