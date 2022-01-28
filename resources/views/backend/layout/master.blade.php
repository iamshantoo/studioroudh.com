<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('backend.layout.partials.head')
        @include('backend.layout.partials.styles')
        @stack('child-style')
    </head>

    <body>
        <div class="container-scroller">
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            @include('backend.layout.partials.navbar')
            </nav>
            <div class="container-fluid page-body-wrapper">
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                @include('backend.layout.partials.side-navbar')
                </nav>
                <div class="main-panel">
                    <div class="content-wrapper">
                    @yield('content')
                    </div>
                    <footer class="footer">
                    @include('backend.layout.partials.footer')
                    </footer>
                </div>
            </div>
        </div>
        @include('backend.layout.partials.scripts-bottom')
        @stack('child-script')
    </body>
</html>