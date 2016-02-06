@extends('views.layouts.master')

@section('stamp')
<!--
******************************************************************
* LobbyKit
* Bladerunner view template: search
******************************************************************
-->
@endsection

@section('main')
	@if(is_user_logged_in())
		@include('views.contents.search')
	@else
		@include('views.contents.unauthorized')
	@endif
@endsection

@section('scripts')
@endsection