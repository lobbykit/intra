<!doctype html>
<html lang="en">
    @include('views.parts.head')
    <body {{ body_class() }}>
        <div class="wrapper">
            @include('views.parts.sidebar')
            <div class="main-panel">
                @include('views.parts.navbar')
                <div class="content">
                    <div class="container-fluid">
                        @yield('main')
                    </div>
                </div>
                @include('views.parts.footer')
            </div>
        </div>
    </body>
    @include('views.parts.scripts')
</html>
