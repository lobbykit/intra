@if($modules=papi_get_field('modules'))
	@foreach($modules as $module)
        @if(Groups_Post_Access::user_can_read_post($module->ID))
            <?php if(papi_get_field($module->ID,'anonymous_only') && is_user_logged_in()) continue; ?>
			<div class="row">
				<?php
                    $post = get_post($module->ID);
                    setup_postdata($GLOBALS['post'] =&$post);
                    bladerunner(rtrim(papi_get_page_type_template($module->ID), '.php'));
                ?>
	        </div>
	        <p>&nbsp;</p>
        @endif
	@endforeach
	<?php wp_reset_postdata(); ?>
@endif
