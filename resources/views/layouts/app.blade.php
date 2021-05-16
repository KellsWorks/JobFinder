{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
        <header class="site-header site-header--menu-right bg-default position-fixed py-7 py-xs-0 site-header--absolute site-header--sticky">
            <div class="container">
                <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">

                    <div class="brand-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('icon.ico') }}" alt="" class="light-version-logo default-logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="mobile-menu">
                        <div class="navbar-nav-wrapper">
                            <ul class="navbar-nav main-menu">
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <i class="icon icon-small-down"></i></a>
                                    <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="drop-menu-item">
                                            <a href="home-1.html">
                        Homepage 01
                      </a>
                                        </li>
                                        <li class="drop-menu-item">
                                            <a href="home-2.html">
                        Homepage 02
                      </a>
                                        </li>
                                        <li class="drop-menu-item">
                                            <a href="home-3.html">
                        Homepage 03
                      </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="icon icon-small-down"></i></a>
                                    <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <li class="drop-menu-item dropdown">
                                            <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Job Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                                            <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                                                <li class="drop-menu-item">
                                                    <a href="./search-grid.html">
                            Job Grid
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./search-list-1.html">
                            Job List
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./jobdetails.html">
                            Job Details
                          </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-menu-item dropdown">
                                            <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown21" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dashboard
                        <i class="icon icon-small-down"></i>
                      </a>
                                            <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown21">
                                                <li class="drop-menu-item">
                                                    <a href="./dashboard-main.html">
                            Dashboard Main
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./dashboard-settings.html">
                            Settings
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./dashboard-posted-applicants.html">
                            Applicants
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./dashboard-posted-jobs.html">
                            Posted Jobs
                          </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-menu-item dropdown">
                                            <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown25g" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Candidate Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                                            <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown25g">
                                                <li class="drop-menu-item">
                                                    <a href="./candidate-profile-main.html">
                            Candidate Profile
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./candidate-profile.html">
                            Candidate Profile 02
                          </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-menu-item dropdown">
                                            <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Search Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                                            <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                                                <li class="drop-menu-item">
                                                    <a href="./search-grid.html">
                            Search Grid
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./search-list-1.html">
                            Search List 01
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./search-list-2.html">
                            Search List 02
                          </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-menu-item">
                                            <a href="./company-profile.html">
                        Company Profile
                      </a>
                                        </li>
                                        <li class="drop-menu-item dropdown">
                                            <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        <i class="icon icon-small-down"></i>
                      </a>
                                            <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                                                <li class="drop-menu-item">
                                                    <a href="javacript:" data-toggle="modal" data-target="#login">
                            Sign In
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="javacript:" data-toggle="modal" data-target="#signup">
                            Sign Up
                          </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-menu-item dropdown">
                                            <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown26" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Essential
                        <i class="icon icon-small-down"></i>
                      </a>
                                            <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown26">
                                                <li class="drop-menu-item">
                                                    <a href="faq.html">
                            Faq
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./error-404.html">
                            404
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./pricing-page.html">
                            Pricing page
                          </a>
                                                </li>
                                                <li class="drop-menu-item">
                                                    <a href="./contact.html">Contact</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                        <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
              <i class="gr-cross-icon"></i>
            </button>
                    </div>
                    <div class="header-btn-devider ml-auto ml-lg-5 pl-2 d-none d-xs-flex align-items-center">
                        <div>
                            <a href="#" class="px-3 ml-7 font-size-7 notification-block flex-y-center position-relative">
                <i class="fas fa-bell heading-default-color"></i>
                <span class="font-size-3 count font-weight-semibold text-white bg-primary circle-24 border border-width-3 border border-white">3</span>
              </a>
                        </div>
                        <div>
                            <div class="dropdown show-gr-dropdown py-5">
                                <a class="proile media ml-7 flex-y-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="circle-40">
                                        <img src="./image/header-profile.png" alt="">
                                    </div>
                                    <i class="fas fa-chevron-down heading-default-color ml-6"></i>
                                </a>
                                <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-auto bg-default" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="dashboard-settings.html">Settings </a>
                                    <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="candidate-profile-main.html">Edit Profile</a>
                                    <a class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="#">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Hamburger-->
                    <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <i class="icon icon-simple-remove icon-close"></i> -->
            <span class="hamburger hamburger--squeeze js-hamburger">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
          </button>
                    <!--/.Mobile Menu Hamburger Ends-->
                </nav>
            </div>
        </header>
        <!-- navbar- -->
        <!-- Header end -->
        <!-- Login Modal -->
        <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-width-px-840 position-relative">
                <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><i class="fas fa-times"></i></button>
                <div class="login-modal-main bg-white rounded-8 overflow-hidden">
                    <div class="row no-gutters">
                        <div class="col-lg-5 col-md-6">
                            <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                                <div class="pb-9">
                                    <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                                        Welcome Back
                                    </h3>
                                    <p class="mb-0 font-size-4 text-white">Log in to continue your account and explore new jobs.</p>
                                </div>
                                <div class="border-top border-default-color-2 mt-auto">
                                    <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                                        <div class="pt-5 px-9">
                                            <h3 class="font-size-7 text-white">
                                                295
                                            </h3>
                                            <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs posted today</p>
                                        </div>
                                        <div class="pt-5 px-9">
                                            <h3 class="font-size-7 text-white">
                                                14
                                            </h3>
                                            <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies registered
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                                <div class="row">
                                    <div class="col-4 col-xs-12">
                                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with LinkedIn</span></a>
                                    </div>
                                    <div class="col-4 col-xs-12">
                                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Google</span></a>
                                    </div>
                                    <div class="col-4 col-xs-12">
                                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Facebook</span></a>
                                    </div>
                                </div>
                                <div class="or-devider">
                                    <span class="font-size-3 line-height-reset ">Or</span>
                                </div>
                                <form action="/">
                                    <div class="form-group">
                                        <label for="email" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                                        <input type="email" class="form-control" placeholder="example@gmail.com" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password" placeholder="Enter password">
                                            <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password"></a>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between">
                                        <label for="terms-check" class="gr-check-input d-flex  mr-3">
                          <input class="d-none" type="checkbox" id="terms-check">
                          <span class="checkbox mr-5"></span>
                          <span class="font-size-3 mb-0 line-height-reset mb-1 d-block">Remember password</span>
                        </label>
                                        <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                                    </div>
                                    <div class="form-group mb-8">
                                        <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in </button>
                                    </div>
                                    <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up Modal -->
        <div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-width-px-840 position-relative">
                <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10" data-dismiss="modal"><i class="fas fa-times"></i></button>
                <div class="login-modal-main bg-white rounded-8 overflow-hidden">
                    <div class="row no-gutters">
                        <div class="col-lg-5 col-md-6">
                            <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                                <div class="pb-9">
                                    <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                                        Create a free account today
                                    </h3>
                                    <p class="mb-0 font-size-4 text-white">Create your account to continue and explore new jobs.</p>
                                </div>
                                <div class="border-top border-default-color-2 mt-auto">
                                    <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                                        <div class="pt-5 px-9">
                                            <h3 class="font-size-7 text-white">
                                                295
                                            </h3>
                                            <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs posted today</p>
                                        </div>
                                        <div class="pt-5 px-9">
                                            <h3 class="font-size-7 text-white">
                                                14
                                            </h3>
                                            <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies registered
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                                <div class="row">
                                    <div class="col-4 col-xs-12">
                                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from LinkedIn</span></a>
                                    </div>
                                    <div class="col-4 col-xs-12">
                                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Google</span></a>
                                    </div>
                                    <div class="col-4 col-xs-12">
                                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Facebook</span></a>
                                    </div>
                                </div>
                                <div class="or-devider">
                                    <span class="font-size-3 line-height-reset">Or</span>
                                </div>
                                <form action="/">
                                    <div class="form-group">
                                        <label for="email2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                                        <input type="email" class="form-control" placeholder="example@gmail.com" id="email2">
                                    </div>
                                    <div class="form-group">
                                        <label for="password2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password2" placeholder="Enter password">
                                            <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password2"></a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password23" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Confirm Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password23" placeholder="Enter password">
                                            <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password23"></a>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                                        <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                          <input class="d-none" type="checkbox" id="terms-check2">
                          <span class="checkbox mr-5"></span>
                          <span class="font-size-3 mb-0 line-height-reset d-block">Agree to the <a href="" class="text-primary">Terms & Conditions</a></span>
                        </label>
                                        <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                                    </div>
                                    <div class="form-group mb-8">
                                        <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Sign Up </button>
                                    </div>
                                    <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Start -->
        <div class="bg-default-2 pt-22 pt-lg-25 pb-13 pb-xxl-32">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <!-- Main Content end -->
        <!-- footer area function start -->
        <!-- cta section -->
        <footer class="footer bg-ebony-clay dark-mode-texts">
            <div class="container">
                <!-- Cta section -->
                <div class="pt-11 pt-lg-20 pb-13 pb-lg-20 border-bottom border-width-1 border-default-color-2">
                    <div class="row justify-content-center ">
                        <div class="col-xl-7 col-lg-12" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                            <!-- cta-content start -->
                            <div class="pb-xl-0 pb-9 text-xl-left text-center">
                                <h2 class="text-white font-size-8 mb-4">Most comprehensive job portal</h2>
                                <p class="text-hit-gray font-size-5 mb-0">We must explain to you how all this mistaken idea of denouncing</p>
                            </div>
                            <!-- cta-content end -->
                        </div>
                        <div class="col-xl-5 col-lg-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                            <!-- cta-btns start -->
                            <div class="btns d-flex justify-content-xl-end justify-content-center align-items-xl-center flex-wrap h-100  mx-n4">
                                <a class="btn btn-outline-gallery btn-xl mx-4 mt-6 text-uppercase" href="#" data-toggle="modal" data-target="#login">Log in</a>
                                <a class="btn btn-green btn-h-60 btn-xl mx-4 mt-6 text-uppercase" href="#" data-toggle="modal" data-target="#signup">Register</a>
                            </div>
                            <!-- cta-btns end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container  pt-12 pt-lg-19 pb-10 pb-lg-19">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-lg-0 mb-9">
                        <!-- footer logo start -->
                        <img src="image/logo-main-white.png" alt="" class="footer-logo mb-14">
                        <!-- footer logo End -->
                        <!-- media start -->
                        <div class="media mb-11">
                            <img src="image/l1/png/message.png" class="align-self-center mr-3" alt="">
                            <div class="media-body pl-5">
                                <p class="mb-0 font-size-4 text-white">Contact us at</p>
                                <a class="mb-0 font-size-4 font-weight-bold" href="mailto:support@uxtheme.net">support@uxtheme.net</a>
                            </div>
                        </div>
                        <!-- media start -->
                        <!-- widget social icon start -->
                        <div class="social-icons">
                            <ul class="pl-0 list-unstyled d-flex align-items-end ">
                                <li class="d-flex flex-column justify-content-center px-3 mr-3 font-size-4 heading-default-color">Follow us on:</li>
                                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-facebook-f font-size-3 pt-2"></i></a></li>
                                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-twitter font-size-3 pt-2"></i></a></li>
                                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-linkedin-in font-size-3 pt-2"></i></a></li>
                            </ul>
                        </div>
                        <!-- widget social icon end -->
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                                <div class="footer-widget widget2 mb-md-0 mb-13">
                                    <!-- footer widget title start -->
                                    <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Company</p>
                                    <!-- footer widget title end -->
                                    <!-- widget social menu start -->
                                    <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">About us</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Contact us</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Careers</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Press</a></li>
                                    </ul>
                                    <!-- widget social menu end -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                                <div class="footer-widget widget3 mb-sm-0 mb-13">
                                    <!-- footer widget title start -->
                                    <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Product</p>
                                    <!-- footer widget title end -->
                                    <!-- widget social menu start -->
                                    <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Features </a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Pricing</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">News</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Help desk</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Support</a></li>
                                    </ul>
                                    <!-- widget social menu end -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                                <div class="footer-widget widget4 mb-sm-0 mb-13">
                                    <!-- footer widget title start -->
                                    <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Services</p>
                                    <!-- footer widget title end -->
                                    <!-- widget social menu start -->
                                    <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Digital Marketing</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">SEO for Business</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Avasta Dash</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">UI Design</a></li>
                                    </ul>
                                    <!-- widget social menu end -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                                <div class="footer-widget widget4">
                                    <!-- footer widget title start -->
                                    <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Legal</p>
                                    <!-- footer widget title end -->
                                    <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Privacy Policy</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Terms & Conditions</a></li>
                                        <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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
