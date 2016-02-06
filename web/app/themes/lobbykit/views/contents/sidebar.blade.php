<?php
    $sidebar_modules = [];
    $sidebar_post=papi_get_field(get_the_ID(), 'sidebar_post');
    if ($sidebar_post) {
        if ($sidebar_post_modules=papi_get_field($sidebar_post->ID, 'sidebar')) {
            $sidebar_modules = $sidebar_post_modules;
        }
    } else {
        if ($sidebar_current_modules=papi_get_field(get_the_ID(), 'sidebar')) {
            $sidebar_modules = $sidebar_current_modules;
        }
    }

    /**
     * Try to get start page sidebar modules
     */
    if (!sizeof($sidebar_modules)) {
        if ($frontpage_id = get_option('page_on_front')) {
            if ($frontpage_modules=papi_get_field($frontpage_id, 'sidebar')) {
                $sidebar_modules = $frontpage_modules;
            }
        }
    }
?>

@if(sizeof($sidebar_modules))
	@foreach($sidebar_modules as $module)
		<div class="row">
			<?php
	            setup_postdata(get_post($module->ID));
	            bladerunner(rtrim(papi_get_page_type_template($module->ID), '.php'));
	        ?>
            <p>&nbsp;</p>
	    </div>
	@endforeach
	<?php wp_reset_postdata(); ?>
@endif