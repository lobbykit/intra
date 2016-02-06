@extends('views.layouts.master')

@section('stamp')
<!--
******************************************************************
* LobbyKit
* Bladerunner view template: article
******************************************************************
-->
@endsection

@section('main')
	@if(have_posts())
		@while(have_posts())
			{{ the_post() }}
			@include('views.contents.post-card')
		@endwhile
	@endif
	@include('views.contents.modules')
@endsection

@section('scripts')
@endsection