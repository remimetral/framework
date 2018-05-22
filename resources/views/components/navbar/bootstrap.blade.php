<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigation">
	<a class="navbar-brand" href="#">Laravel</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link home ajax" href="{{ route('home-'.$lang) }}">@lang('navigation.home') <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link about ajax" href="{{ route('about-'.$lang) }}">@lang('navigation.about')</a>
			</li>
		</ul>
        <ul class="navbar-nav ml-auto">
			@if (Auth::guest())
				<li class="nav-item"><a class="nav-link login ajax" href="{{ route('login') }}">Login</a></li>
				<li class="nav-item"><a class="nav-link register ajax" href="{{ route('register') }}">Register</a></li>
			@else
				<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{ Auth::user()->name }} <span class="caret"></span>
						</a>
						<div class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Backend</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>
				</li>
			@endif
			@if ($lang == 'en')
				<li class="nav-item lang">
					<a class="nav-link" href="{{ route('home-fr') }}">FR</a>
				</li>
			@else
				<li class="nav-item lang">
					<a class="nav-link" href="{{ route('home-en') }}">EN</a>
				</li>
			@endif
			<!--{!! Form::open(['method' => 'POST', 'route' => 'changelocale', 'class' => 'form-inline navbar-select']) !!}

			    <div class="form-group @if($errors->first('locale')) has-error @endif">
			        <span aria-hidden="true"><i class="fa fa-flag"></i></span>
			        {!! Form::select(
			            'locale',
			            ['en' => 'EN', 'fr' => 'FR'],
			            \App::getLocale(),
			            [
			                'id'       => 'locale',
			                'class'    => 'form-control',
			                'required' => 'required',
			                'onchange' => 'this.form.submit()',
			            ]
			        ) !!}
			        <small class="text-danger">{{ $errors->first('locale') }}</small>
			    </div>

			    <div class="btn-group pull-right sr-only">
			        {!! Form::submit("Change", ['class' => 'btn btn-success']) !!}
			    </div>

			{!! Form::close() !!}-->
			<!--<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>-->
		</ul>
		<!--<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>-->
	</div>
</nav>
