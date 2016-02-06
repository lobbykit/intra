@extends('views.layouts.master')

@section('stamp')
<!--
******************************************************************
* LobbyKit
* Bladerunner view template: index
******************************************************************
-->
@endsection

@section('main')
	@if(have_posts())
		@while(have_posts())
			{{ the_post() }}
			@include('views.contents.post-card')
            <hr/>			
		@endwhile
	@endif
@endsection

@section('scripts')
@endsection