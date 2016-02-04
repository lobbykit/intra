	<!-- Reference block for JS -->
	<div class="ref" id="ref">
	    <div class="color-primary"></div>
	    <div class="chart">
	        <div class="color-primary"></div>
	        <div class="color-secondary"></div>
	    </div>
	</div>
	<script src="{{ assets('js/vendor.js') }}"></script>
	<script src="{{ assets('js/app.js') }}"></script>

    {{ wp_footer() }}

    @yield('scripts')
    