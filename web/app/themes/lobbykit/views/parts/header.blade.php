<header class="header">
    <div class="header-block header-block-collapse hidden-lg-up">
        <button class="collapse-btn" id="sidebar-collapse-btn"> <i class="fa fa-bars"></i> </button>
    </div>
    <div class="header-block header-block-search hidden-sm-down">
        @if(is_user_logged_in())
            @include('views.parts.searchform')
        @endif
    </div>
    <div class="header-block header-block-nav">
        <ul class="nav-profile">
            @if(is_user_logged_in())
                @include('views.parts.notifications')
                @include('views.parts.profile-dropdown')
            @else
                @include('views.parts.login-dropdown')
            @endif
        </ul>
    </div>
</header>