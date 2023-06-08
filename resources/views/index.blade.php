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

    <footer>
        <div class="container">
            <div class="row">
                <div class="mts-footer-content">

                    <ul class="mts-footer-social-info">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    @include('style.js')
</body>
</html>
