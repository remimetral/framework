@extends('layouts.switcher')

@section('description'){{ strip_tags(ucfirst(Lang::get('meta.description'))) }}@stop

@section('title'){{ strip_tags(ucfirst(Lang::get('meta.title.about'))) }}@stop

@section('content')

	<input class="page_title" type="hidden" value="{{ strip_tags(ucfirst(Lang::get('meta.title.about'))) }}">
	<input class="page_id" type="hidden" value="{{ $page_id }}">
	<input class="page_menu_id" type="hidden" value="{{ $page_id }}">
	<input class="page_lang_url_id" type="hidden" value="{{ route($page_id.'-'.$langreverse) }}">

	<div class="container_page {{ $page_id }}">
		<div class="bg_page"></div>
		<div class="content_scroll">
			<div class="content">
				<div class="container" id="app">
					<calendar></calendar>
				</div>
			</div>
		</div>
	</div>

@endsection
