<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153583081-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-153583081-1');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EWCZZDGRX3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-EWCZZDGRX3');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://www.google.com/recaptcha/api.js?render=6LdYXukpAAAAALvZZQI3m6iQYd8o-6C13RXW0VAk"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{ asset('front/assets/images/favicon_bitlogicx.png') }}" rel="icon">
    <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&subset=latin%2Clatin-ext'
        type='text/css' media='all' />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/owl.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/swiper.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/icomoon.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet" rel="stylesheet" />
    <link href="{{ asset('front/assets/css/scss/elements/theme-css.css') }}" rel="stylesheet" />
    <link id="creote-color-switcher-css" href="{{ asset('front/assets/css/scss/elements/color-switcher/color.css') }}"
        rel="stylesheet" />
    <!-- Style-->
    <!----woocommerce---->
    <link href="{{ asset('front/assets/css/woocommerce-layout.css') }}" type='text/css' media='all'
        rel='stylesheet' />
    <link href="{{ asset('front/assets/css/woocommerce.css') }}" type='text/css' media='all' rel='stylesheet' />
    <!-- Template Main CSS File -->
    <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/carousel.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Additional scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('front/assets/js/swiper.min.js') }}"></script>

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Back to top button -->
{{--    <button id="myBtn" onclick="topFunction()">Top</button>--}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('front/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('front/assets/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('front/assets/js/color-scheme.js') }}"></script>
    <script src="{{ asset('front/assets/js/owl.js') }}"></script>
    <script src="{{ asset('front/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('front/assets/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/appear.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('front/assets/js/sharer.js') }}"></script>
    <script src="{{ asset('front/assets/js/validation.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/creote-extension.js') }}"></script>

    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

</body>

</html>
