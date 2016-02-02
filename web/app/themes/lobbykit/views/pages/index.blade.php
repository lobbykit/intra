@extends('views.layouts.master')

@section('main')
	@include('views.content.dashboard')
@endsection

@section('scripts')
	<script type="text/javascript">
    	jQuery(document).ready(function($){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
@endsection