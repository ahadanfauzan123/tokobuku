<!DOCTYPE html>
<html lang="en">
<head>
{{-- Style css --}}
@include('style.css')
{{-- Title --}}
@yield('title')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="status"></div>
    </div>
    <header>
        {{-- Navbar --}}
        @include('component.navbar')
    </header>
    <!-- Header End -->

    {{-- Content --}}
    @yield('content')

    @include('component.footer')
    <!-- Footer End -->
    @include('style.js')
</body>
</html>
