{{-- Copyright (c) Nextgenerations Malawi. Created 15/05/2021 18:10 --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta author="KellsWorks,RodgerCodes@NextgenerationsMalawi" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 404 - Error </title>

    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icon-font/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/typography-font/typo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-5/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/nice-select/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/ui-range-slider/jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>

<body>
    <div class="site-wrapper overflow-hidden ">

        <div class="header pt-11 pos-abs-tl w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{{ url('/') }}" class="brand-logo">
                        <img src="icon.png" alt="" height="40">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="404-page bg-default min-h-100vh flex-all-center pt-lg-15 pt-xxl-17 pt-27 pb-lg-0 pb-18">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 px-lg-9">

                        <div class="card-404 text-center" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true">

                            <img src="{{ asset('assets/image/svg/404.svg') }}" alt="" class="w-100 px-9">

                            <div class="404-texts pt-14">
                                <h3 class="card-title font-size-9 font-weight-bold">Page is not found!</h3>

                                <p class="card-text font-size-4 px-xxl-28 px-xs-10 px-sm-13 px-lg-13 px-md-28 px-xl-22 px-0 mb-11">This page may ne broken or currently under maintenance.</p>

                                <a href="{{ url('/') }}" class="btn btn-green btn-h-60 text-white rounded-5 w-180 m-auto text-uppercase">Back to home</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/aos/aos.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ui-range-slider/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
