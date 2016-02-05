@extends('views.layouts.master')

@section('stamp')
<!--
******************************************************************
* LobbyKit
* Bladerunner view template: modules
******************************************************************
-->
@endsection

@section('contents')
	<article class="content modules">
		<div class="row">
			@if($modules=papi_get_field('modules'))
				@foreach($modules as $module)
					<?php
						setup_postdata(get_post($module->ID));
		                bladerunner(rtrim(papi_get_page_type_template($module->ID), '.php'));
		            ?>
				@endforeach
				<? wp_reset_postdata(); ?>
			@endif
		</div>
	</article>
@endsection

@section('scripts')
@endsection