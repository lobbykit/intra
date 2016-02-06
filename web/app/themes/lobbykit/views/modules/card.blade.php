<div class="col-xs-12">
	<div class="card">
	    @if(has_post_thumbnail())
	        {!! get_the_post_thumbnail(get_the_ID(),'full',['class'=>'card-img-top img-fluid']) !!}
	    @endif
		<div class="card-block">
			<h3 class="title">{{ get_the_title() }}</h3>
		</div>
	    <div class="card-block">
	        {!! the_content() !!}
	    </div>
	    @if($button=papi_get_field('cta'))
	    <div class="card-block text-xs-center">
	    	<a class="btn {{ papi_get_field('cta_color') }}" href="{{ $button->url }}" target="{{ $button->target }}">{{ $button->title }}</a>
	    </div>
	    @endif
	</div>
</div>
