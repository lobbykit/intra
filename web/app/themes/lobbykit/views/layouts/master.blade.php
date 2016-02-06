<!doctype html>
<html lang="en">
    @yield('stamp')
    @include('views.parts.head')

    <body {{ body_class() }}>

        <div class="main-wrapper">
            <div class="app" id="app">
                @include('views.parts.header')
                @include('views.parts.menubar')

                <div class="content">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            @yield('main')
                        </div>
                        <div class="col-xs-12 col-md-4">
                            @include('views.contents.sidebar')
                        </div>
                    </div>
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
