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

                <div class="row">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>

                @include('views.parts.footer')
                @if( !is_user_logged_in() )
                    @include('views.modals.login')
                    @include('views.modals.register')
                    @include('views.modals.forgot')
                @endif
            </div>
        </div>

        @include('views.parts.scripts')

    </body>
</html>
