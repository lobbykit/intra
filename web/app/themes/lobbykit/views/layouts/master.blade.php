<!doctype html>
<html lang="en">
    @yield('stamp')
    @include('views.parts.head')

    <body {{ body_class() }}>

        <div class="main-wrapper">
            <div class="app" id="app">
                @include('views.parts.header')
                @include('views.parts.sidebar')
                @yield('contents')
                @include('views.parts.footer')
                @if( !is_user_logged_in() )
                    @include('views.modals.login')
                @endif
            </div>
        </div>

        @include('views.parts.scripts')

    </body>
</html>
