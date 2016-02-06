<div class="card">
    @if(has_post_thumbnail())
        {!! get_the_post_thumbnail(get_the_ID(),'full',['class'=>'card-img-top img-fluid']) !!}
    @endif
    <div class="card-block">
        <h2 class="display-4">{{ the_title() }}</h1>
        <h6 class="card-subtitle text-muted">{{ get_the_date() }} | {{ get_the_author() }}</h6>
    </div>
    <div class="card-block">
        {!! the_content() !!}
    </div>
    <div class="card-footer text-muted">
        <?=comments_number(__('No comments yet','intra'), __('1 comment','intra'),__('% comments','intra')) ?>
    </div>
</div>
<p><br/></p>
