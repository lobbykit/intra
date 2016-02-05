<?php 
    setup_postdata(get_the_ID());
?>
<article class="content unauthorized">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col col-xs-12 col-sm-12 col-md-12 col-xl-12 stats-col">
				<div class="card card-default">
                    <div class="card-header">
                        <div class="header-block">
                            {{ the_date() }}, {{ the_author() }}
                            <h1>{{ the_title() }}</h1>
                            <hr/>
                        </div>
                    </div>
                    <div class="card-block">
                        {!! the_content() !!}
                    </div>
                </div>
			</div>
		</div>
	</section>
</article>