@extends('views.layouts.master')

@section('main')
	@include('views.content.dashboard')
@endsection

@section('scripts')
	<script type="text/javascript">
    	jQuery(document).ready(function($){

        	demo.initChartist();

    	});
	</script>
@endsection