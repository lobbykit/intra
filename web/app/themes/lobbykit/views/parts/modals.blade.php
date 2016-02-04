@if(is_user_logged_in())
@else
    @include('views.modals.login')
@endif