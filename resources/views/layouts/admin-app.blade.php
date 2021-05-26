{{-- Copyright (c) Nextgenerations Malawi. Created at 15/05/2021 18:28 --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta author="KellsWorks,RodgerCodes@NextgenerationsMalawi" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('ADMIN_TITLE') }}</title>
    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    @include('scripts.css')

</head>

<body>
    <div class="site-wrapper overflow-hidden bg-default-2">

        <header class="site-header site-header--menu-right bg-default position-fixed py-7 py-xs-0 site-header--absolute">
            <div class="container-fluid-fluid px-10">
                <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">

                    <div class="brand-logo">
                        <a href="{{ url('/') }}">

                            <img height="40" src="{{ asset('icon.png') }}" alt="" class="light-version-logo default-logo">

                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="mobile-menu">
                        <div class="navbar-nav-wrapper">

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

                    <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="hamburger hamburger--squeeze js-hamburger">
                        <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        </span>
                        </span>
                    </button>

                </nav>
            </div>
        </header>

        <div class="dashboard-sidebar-wrapper pt-11" id="sidebar">
            <div class="brand-logo px-11">
                <a href="https://shade.uxtheme.net/shade-pro">
          <img src="image/logo-main-black.png" alt="">
        </a>
            </div>

            <div class="my-15 px-11">
                <a href="#" class="btn btn-primary btn-xl w-100 text-uppercase" href="javacript:" data-toggle="modal" data-target="#new-job"><span class="mr-5 d-inline-block">+</span>Post a new job</a>
            </div>
            <ul class="list-unstyled dashboard-layout-sidebar">
                @yield('menu')
            </ul>

        </div>
        <a class="sidebar-mobile-button" data-toggle="collapse" href="#sidebar" role="button" aria-expanded="false" aria-controls="sidebar">
      <i class="icon icon-sidebar-2"></i>
    </a>
        <div class="dashboard-main-container mt-25 mt-lg-31" id="dashboard-body">
            @yield('content')
        </div>


    @include('scripts.js')

</body>

</html>
