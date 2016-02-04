<!doctype html>
<html lang="en">
    @include('views.parts.head')

    <body {{ body_class() }}>

        <div class="main-wrapper">
            <div class="app" id="app">
                @include('views.parts.header')
                @include('views.parts.sidebar')
                @yield('contents')
                @include('views.parts.footer')
                @include('views.parts.modals')
            </div>
        </div>

        @include('views.parts.scripts')
    </body>
</html>
