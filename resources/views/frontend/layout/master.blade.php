<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('frontend.layout.partials.head')
        @include('frontend.layout.partials.scripts-top')
        @include('frontend.layout.partials.styles')
        @stack('child-style')
    </head>
    <body>
        
        <header class="nk-header @if(Request::segment(1) == "frontend" && Request::segment(2) == "portfolios") nk-header-opaque @endif">
            @include('frontend.layout.partials.navbar')
        </header>
        @include('frontend.layout.partials.mobile-navbar')

        <div class="nk-main">
            @yield('content')
            @include('frontend.layout.partials.footer')
        </div>
        @include('frontend.layout.partials.scripts-bottom')
        @stack('child-script')
    </body>
</html>