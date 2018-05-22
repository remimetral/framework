<nav class="navbar is-transparent" role="navigation" aria-label="main navigation" id="navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="#">Laravel</a>

		<a role="button" class="navbar-burger" data-target="navbarMenu" aria-label="menu" aria-expanded="false">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</a>
	</div>
	<div class="navbar-menu" id="navbarMenu">
		<div class="navbar-start">
			<a class="navbar-item home ajax" href="{{ route('home-'.$lang) }}">@lang('navigation.title.home')</a>
			<a class="navbar-item about ajax" href="{{ route('about-'.$lang) }}">@lang('navigation.title.about')</a>
		</div>

		<div class="navbar-end">
			@if (Auth::guest())
				<a class="navbar-item login ajax" href="{{ route('login') }}">@lang('navigation.title.login')</a>
				<a class="navbar-item register ajax" href="{{ route('register') }}">@lang('navigation.title.register')</a>
			@else
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link" href="/documentation/overview/start/">
			          	{{ Auth::user()->name }}
			        </a>
					<div class="navbar-dropdown is-boxed">
						<a class="navbar-item" href="#">@lang('navigation.title.admin')</a>
						<hr class="navbar-divider">
						<a class="navbar-item is-active" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</div>
				</div>
			@endif
			@if ($lang == 'en')
				<a class="navbar-item lang" href="{{ route('home-fr') }}">FR</a>
			@else
				<a class="navbar-item lang" href="{{ route('home-en') }}">EN</a>
			@endif
		</div>
	</div>
</nav>
