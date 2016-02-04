<!--
### LobbyKit Bladerunner View: views.parts.profile-dropdown
-->
<?php
    $current_user = wp_get_current_user();
?>
<li class="profile dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <div class="img" style="background-image: url('{{ get_avatar_url(get_current_user_id()) }}')"></div> 
        <span class="name">
            {{ $current_user->display_name }}
        </span> 
    </a>
    <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
        <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> {{__('Profile','intra')}} </a>
        <a class="dropdown-item" href="#"> <i class="fa fa-bell icon"></i> {{__('Notifications','intra')}} </a>
        <a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> {{__('Settings','intra')}} </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ wp_logout_url('/') }}"> <i class="fa fa-power-off icon"></i> {{__('Logout','intra')}} </a>
    </div>
</li>

