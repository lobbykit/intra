<!--
### LobbyKit Bladerunner View: views.parts.sidebar
-->
<aside class="sidebar" style="background-image:url('{{ assets('assets/bgtexture.png') }}'); background-repeat: repeat-y;">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <a href="/">
                <div class="brand">
                    <div class="logo"> 
                        <span class="l l1"></span> 
                        <span class="l l2"></span> 
                        <span class="l l3"></span> 
                        <span class="l l4"></span> 
                        <span class="l l5"></span> 
                    </div>
                    {{ get_bloginfo('title') }}
                </div>
            </a>
        </div>
        <nav class="menu">
            {{ wp_nav_menu([
                'menu_class' => 'nav metismenu',
                'menu_id' => 'sidebar-menu',
                'container' => null,
                'theme_location' => is_user_logged_in() ? 'sidebar-authorized' : 'sidebar-unauthorized',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
            ]) }}
            <!--ul class="nav metismenu" id="sidebar-menu">
                <li class="active">
                    <a href="/"> <i class="fa fa-home"></i> Dashboard </a>
                </li>
            </ul-->
        </nav>
    </div>
    <footer class="sidebar-footer">
        <!--ul class="nav metismenu" id="customize-menu">
            <li>
                <a href="/"> <i class="fa fa-cog"></i> Customize </a>
            </li>
        </ul-->
    </footer>
</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
