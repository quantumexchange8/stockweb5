<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title inertia>{{ config('app.name', 'StockWeb5') }}</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
    {{-- <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest')}}" /> --}}
    <meta name="description" content="Oslim HTML Template For Business" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/oslim-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/oslim.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/oslim-responsive.css')}}" />

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Set the text content of the element with id 'currentYear'
            document.getElementById('currentYear').innerText = new Date().getFullYear();
        });
    </script>

</head>

<body>
    
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
    </div>
     <!-- /.preloader -->
     <div class="page-wrapper">
        @include('layouts.inc.header')
        @yield('content')
        {{-- @include('layouts.inc.footer') --}}
    </div>
    <!-- /.page-wrapper -->

    @include('layouts.inc.mobile-nav')
    @include('layouts.inc.search-popup')

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js')}}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js')}}"></script>

    <!-- template js -->
    <script src="{{ asset('assets/js/oslim.js')}}"></script>

</body>
</html>
