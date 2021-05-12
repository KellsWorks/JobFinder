{{-- Nextgenerations Malawi - Job Finder --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOB FINDER</title>
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icon-font/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/typography-font/typo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-5/css/all.css') }}">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/nice-select/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/ui-range-slider/jquery-ui.css') }}">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css" integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/regular.min.css" integrity="sha512-Nqct4Jg8iYwFRs/C34hjAF5og5HONE2mrrUV1JZUswB+YU7vYSPyIjGMq+EAQYDmOsMuO9VIhKpRUa7GjRKVlg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" integrity="sha512-jQqzj2vHVxA/yCojT8pVZjKGOe9UmoYvnOuM/2sQ110vxiajBU+4WkyRs1ODMmd4AfntwUEV4J+VfM6DkfjLRg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" integrity="sha512-W3ZfgmZ5g1rCPFiCbOb+tn7g7sQWOQCB1AkDqrBG1Yp3iDjY9KYFh/k1AWxrt85LX5BRazEAuv+5DV2YZwghag==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/v4-shims.min.css" integrity="sha512-iaLhEHW3p+ZNgkDKBi4zEfH+aWAMGJ7I7njqD3jKnbN0ux4Gkumu2vjuI71YUov20OIPl3R32v8HO+V+6OgbvQ==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/brands.min.js" integrity="sha512-vefaKmSAX3XohXhN50vLfnK12TPIO+4uRpHjXVkX726CqbicEiAQGRzsMTE+EpLkBk4noUcUYu6AQ5af2vfRLA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js" integrity="sha512-KCwrxBJebca0PPOaHELfqGtqkUlFUCuqCnmtydvBSTnJrBirJ55hRG5xcP4R9Rdx9Fz9IF3Yw6Rx40uhuAHR8Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/conflict-detection.min.js" integrity="sha512-yJCW8dCR1gd61mpVk3LuLa5wSkGZ3C5cM1gegZzKTrjDB0NaxoJfF8Sh1zLy65SWjkWRz6ynRDYVbm2JAlS0Hg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/solid.min.js" integrity="sha512-Qc+cBMt/4/KXJ1F6nNQahXIsgPygHM4S2XWChoumV8qkpZ9oO+gBDBEpOxgbkQQ/6DlHx6cUxa5nBhEbuiR8xw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/regular.min.js" integrity="sha512-jR9mIF29jOBsgismrZaiPV9H/VNWOpnILyA4MPEPgJFadfbWT0mQ5MnxCMd+JCYdoTuB2n1SkI00XkELU4ETmg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/v4-shims.min.js" integrity="sha512-1ND726aZWs77iIUxmOoCUGluOmCT9apImcOVOcDCOSVAUxk3ZSJcuGsHoJ+i4wIOhXieZZx6rY9s6i5xEy1RPg==" crossorigin="anonymous"></script>
    <!-- Custom stylesheet -->
</head>

<body>
    <div class="site-wrapper overflow-hidden ">
        <!-- Header start  -->
        <!-- Header Area -->
        <header class="site-header site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
            <div class="container">
                <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
                    <!-- Brand Logo-->
                    <div class="brand-logo">
                        <a href="./index.html">
                            <h3>
                                <span class="text-green">JOB</span> FINDER
                            </h3>
                            {{-- <!-- light version logo (logo must be black)-->
                            <img src="./assets/image/logo-main-black.png" alt="" class="light-version-logo default-logo">
                            <!-- Dark version logo (logo must be White)-->
                            <img src="./assets/image/logo-main-white.png" alt="" class="dark-version-logo"> --}}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="mobile-menu">
                        <div class="navbar-nav-wrapper">
                            <ul class="navbar-nav main-menu">
                                <li class="nav-item active">
                                    <a class="nav-link" aria-expanded="false">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('jobs') }}" class="nav-link">JOBS</a>
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
                    <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
                        <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset" href="javacript:" data-toggle="modal" data-target="#login">
              Log in
            </a>
                        <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#signup">
              Sign up
            </a>
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
        <!-- Login Modal -->
        <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog max-width-px-840 position-relative">
                <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><ion-icon name="close-outline"></ion-icon></button>
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
                                <h3 class="text-center"><span class="text-green">JOB</span> FINDER</h3>
                                <div class="or-devider">
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                                        <input type="email" placeholder="Enter your email address" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                                        <div class="position-relative">
                                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="Enter password">
                                            <a class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password"></a>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between">

                                        <label for="remember" class="gr-check-input d-flex  mr-3">
                                        <input class="d-none" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkbox mr-5"></span>
                                        <span class="font-size-3 mb-0 line-height-reset mb-1 d-block">{{ __('Remember Me') }}</span>
                                        </label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="font-size-3 text-dodger line-height-reset">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                    </div>
                                    {{-- <div class="form-group form-check">

                                      </div> --}}
                                    <div class="form-group mb-8">
                                        <button type="submit" class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in </button>
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
                                            <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New business, companies and firms
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                                <h3 class="text-center"><span class="text-green">JOB</span> FINDER</h3>
                                <div class="or-devider">
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
        <!-- Header start end -->
        <!-- Hero Area -->
        <div class="bg-gradient-1 pt-26 pt-md-32 pt-lg-33 pt-xl-35 position-relative z-index-1 overflow-hidden">
            <!-- .Hero pattern -->
            <div class="pos-abs-tr w-50 z-index-n2">
                <img src="./assets/image/patterns/hero-pattern.png" alt="" class="gr-opacity-1">
            </div>
            <!-- ./Hero pattern -->
            <div class="container">
                <div class="row position-relative align-items-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-12 pt-lg-13 pb-lg-33 pb-xl-34 pb-md-33 pb-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <h1 class="font-size-11 mb-12 pr-md-30 pr-lg-0">Find the perfect job that you deserve.</h1>
                        <div class="">
                            <!-- .search-form -->
                            <form action="/" class="search-form shadow-6">
                                <div class="filter-search-form-1 bg-white rounded-sm shadow-4">
                                    <div class="filter-inputs">
                                        <div class="form-group position-relative">
                                            <input class="form-control focus-reset pl-13" type="text" id="keyword" placeholder="Job title">
                                            <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"><ion-icon name="search-outline"></ion-icon></i></span>
                                        </div>
                                        <!-- .select-city starts -->
                                        <div class="form-group position-relative">
                                            <select name="district" id="district" class="nice-select pl-13 h-100 arrow-3 font-size-4">
                                            <option value="" data-display="Location" class="text-uppercase">Location</option>
                                            @foreach ($districts as $district)
                                                  <option value="">{{ $district->name }}</option>
                                            @endforeach
                                            </select>
                                            <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"><ion-icon name="pin-outline"></ion-icon></span>
                                        </div>
                                        <!-- ./select-city ends -->
                                    </div>
                                    <!-- .Hero Button -->
                                    <div class="button-block">
                                        <button class="btn btn-primary line-height-reset h-100 btn-submit w-100 text-uppercase">Search</button>
                                    </div>
                                    <!-- ./Hero Button -->
                                </div>
                            </form>
                            <!-- ./search-form -->
                            <p class="heading-default-color font-size-3 pt-7"><span class="text-smoke">Search keywords e.g.</span> Sales and marketer, Nurse, Accountant, Electrician etc.</p>
                        </div>
                    </div>
                    <!-- Hero Right Image -->
                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 col-8 pos-abs-br z-index-n1 position-static position-md-absolute mx-auto ml-md-auto" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                        <div class="align-items-center ml-xxl-23 ml-xl-12 ml-md-7">
                            <img src="{{ asset('img/128-1282810_black-surprise-male-man-happy-black-man-png.png') }}" alt="" class="w-400" height="700">
                        </div>
                    </div>
                    <!-- ./Hero Right Image -->
                </div>
            </div>
        </div>
        <!-- Hero Area -->
        <!-- Brand1Section Area -->
        <!-- Company Section -->
        <div class="bg-black-2 dark-mode-texts pt-13 pt-lg-24 pb-12 pb-lg-23">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-9 text-center text-lg-left">
                            <h5 class="font-size-5 font-weight-normal">Get hired in top companies</h5>
                        </div>
                    </div>
                </div>
                <!-- Brand Logos -->
                <div class="row align-items-center justify-content-center justify-content-lg-between">
                    <!-- Single Brand -->
                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-1.png" alt="">
                    </div>
                    <!-- Single Brand -->
                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-2.png" alt="">
                    </div>
                    <!-- Single Brand -->
                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-3.png" alt="">
                    </div>
                    <!-- Single Brand -->
                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="700" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-4.png" alt="">
                    </div>
                    <!-- Single Brand -->
                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="900" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-5.png" alt="">
                    </div>
                    <!-- Single Brand -->
                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="1200" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-6.png" alt="">
                    </div>
                </div>
                <!-- End Brand Logos -->
            </div>
        </div>

        <div class="pt-11 pt-lg-26 pb-lg-16" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
            <div class="container">
                <!-- Section Top -->
                <div class="row align-items-center pb-14">
                    <!-- Section Title -->
                    <div class="col-12 col-lg-6">
                        <div class="text-center text-lg-left mb-13 mb-lg-0">
                            <h2 class="font-size-9 font-weight-bold">Explore by category</h2>
                        </div>
                    </div>
                    <!-- Section Button -->
                    <div class="col-12 col-lg-6">
                        <div class="text-center text-lg-right">
                            <a class="btn btn-outline-green text-uppercase" href="#">Explore All</a>
                        </div>
                    </div>
                    <!-- Section Button End -->
                </div>
                <!-- End Section Top -->
                <div class="row justify-content-center">
                    <!-- Single Category -->
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-blue bg-blue-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <ion-icon name="business-outline"></ion-icon>
                            </div>
                            <!-- Category Content -->
                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Business Development</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Single Category -->
                    <!-- Single Category -->
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-spray bg-spray-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <ion-icon name="people-outline"></ion-icon>
                            </div>
                            <!-- Category Content -->
                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Customer Service</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>235</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Single Category -->
                    <!-- Single Category -->
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-coral bg-coral-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-layer-group"></i>
                            </div>
                            <!-- Category Content -->
                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Development</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>624</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Single Category -->
                    <!-- Single Category -->
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-red bg-red-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-pen-nib"></i>
                            </div>
                            <!-- Category Content -->
                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Design</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>174</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Single Category -->
                    <!-- Single Category -->
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-orange bg-orange-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <!-- Category Content -->
                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Marketing &amp; Management</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>268</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Single Category -->
                    <!-- Single Category -->
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-yellow bg-yellow-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                            <!-- Category Content -->
                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Sales &amp; Communication</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>156</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Single Category -->
                    <!-- Single Category -->
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-turquoise bg-turquoise-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="icon icon-sidebar-2"></i>
                            </div>
                            <!-- Category Content -->
                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Project Management</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>162</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Single Category -->
                    <!-- Single Category -->
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-green bg-green-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-user"></i>
                            </div>
                            <!-- Category Content -->
                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Human Resource </h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>84</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    <!-- End Single Category -->
                </div>
            </div>
        </div>
        <!-- End Category Area -->
        <!-- category Area -->
        <!-- ContentOne Area -->
        <!-- content-1 section -->
        <section class="pt-7 pt-lg-16 pb-2 pb-lg-32">
            <div class="container">
                <div class="row pb-lg-6 justify-content-center">
                    <div class="col-xl-6 col-lg-5 col-md-10 col-sm-11" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <!-- content-1 left-content start -->
                        <div class="position-relative pr-xl-20 pr-md-15 pr-15">
                            <!-- content img start -->
                            <img src="./assets/image/l1/jpg/content-1-img1.jpg" alt="" class="w-100 rounded overflow-hidden" />
                            <!-- content img end -->
                            <!-- abs-content start -->
                            <div class="pos-abs-br pt-17 pb-9 pl-8 pr-12  bg-white shadow-2 rounded scale-p7 scale-xs-1 mb-n20 mr-n10 mr-xs-5 mr-sm-0 mb-xs-n10">
                                <!-- check-mark start -->
                                <span class="pos-abs-tl circle-79 bg-green font-size-9 mt-n9 ml-n9 ">
              <i class="fas fa-check text-white"></i>
            </span>
                                <!-- check-mark end -->
                                <p class="text-black-2 text-4 font-weight-bold mb-7">
                                    <span class="font-weight-normal">Found</span> 290+ Jobs
                                </p>
                                <div class="d-flex">
                                    <ul class="list-unstyled list-overlapped-icon max-width-130px">
                                        <li class="ml-0">
                                            <a href="" class="circle-34">
                        <img src="./assets/image/l1/png/smal-logo1.png" alt="" class="img" />
                      </a>
                                        </li>
                                        <li>
                                            <a href="#">
                        <img src="./assets/image/l1/png/smal-logo2.png" alt="" class="img img2" />
                      </a>
                                        </li>
                                        <li>
                                            <a href="#">
                        <img src="./assets/image/l1/png/smal-logo3.png" alt="" class="img img3" />
                      </a>
                                        </li>
                                        <li>
                                            <a href="#">
                        <img src="./assets/image/l1/png/smal-logo4.png" alt="" class="img img4" />
                      </a>
                                        </li>
                                        <li>
                                            <a href="#">
                        <img src="./assets/image/l1/png/smal-logo5.png" alt="" class="img img5" />
                      </a>
                                        </li>
                                    </ul>
                                    <p class="text-space-black font-size-4 mt-1">+14 Giants</p>
                                </div>
                            </div>
                            <!-- abs-content end -->
                        </div>
                        <!-- content-1 left-content end -->
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-8" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                        <!-- content-1 start -->
                        <div class="pl-lg-10 pl-0 d-flex flex-column justify-content-center h-100 pt-lg-0 pt-15 pr-md-13 pr-xl-15 pr-xxl-25 pr-0 ">
                            <!-- content-1 section-title start -->
                            <h2 class="font-size-9 mb-8 pr-xxl-15">
                                Help you to get the best job that fits you
                            </h2>
                            <p class="text-gray font-size-5 mb-10 mb-lg-16">
                                Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approach
                            </p>
                            <!-- content-1 section-title end -->
                            <!-- content-1 list-group start -->
                            <ul class="list-unstyled pl-0">
                                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                                    <i class="fas fa-check font-size-4 text-green mr-6"></i>Bring to the table win-win survival
                                </li>
                                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                                    <i class="fas fa-check font-size-4 text-green mr-6"></i>Capitalize on low hanging fruit to identify
                                </li>
                                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                                    <i class="fas fa-check font-size-4 text-green mr-6"></i>But I must explain to you how all this
                                </li>
                            </ul>
                            <!-- content-1 list-group end -->
                        </div>
                        <!-- content-1 end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ContentOne Area -->
        <!-- featuredJobOne Area -->
        <div class="pt-11 pt-lg-27 pb-7 pb-lg-26 bg-black-2 dark-mode-texts">
            <div class="container">
                <!-- Section Top -->
                <div class="row align-items-center pb-14">
                    <!-- Section Title -->
                    <div class="col-12 col-xl-6 col-lg-6">
                        <div class="text-center text-lg-left mb-13 mb-lg-0">
                            <h2 class="font-size-9 font-weight-bold">Featured Jobs</h2>
                        </div>
                    </div>
                    <!-- Section Button -->
                    <div class="col-12 col-xl-6 col-lg-6">
                        <div class="text-center text-lg-right">
                            <a class="btn btn-outline-white text-uppercase" href="#">Explore All</a>
                        </div>
                    </div>
                    <!-- Section Button End -->
                </div>
                <!-- End Section Top -->
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                        <!-- Start Feature One -->
                        <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
                            <div class="d-block mb-7">
                                <a href="#"><img src="./assets/image/l1/png/feature-brand-1.png" alt=""></a>
                            </div>
                            <a href="#" class="font-size-3 d-block mb-0 text-gray">Google INC</a>
                            <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">Product Designer</a></h2>
                            <ul class="list-unstyled mb-1 card-tag-list">
                                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <ion-icon name="pin-outline"></ion-icon> Berlyn
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
                            </ul>
                            <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
                            <div class="card-btn-group">
                                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><ion-icon name="bookmark-outline"></ion-icon> Save it</a>
                            </div>
                        </div>
                        <!-- End Feature One -->
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                        <!-- Start Feature One -->
                        <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
                            <div class="d-block mb-7">
                                <a href="#"><img src="./assets/image/l1/png/feature-brand-2.png" alt=""></a>
                            </div>
                            <a href="#" class="font-size-3 d-block mb-0 text-gray">AirBnb</a>
                            <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">UI/UX Designer</a></h2>
                            <ul class="list-unstyled mb-1 card-tag-list">
                                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <ion-icon name="pin-outline"></ion-icon> Berlyn
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
                            </ul>
                            <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
                            <div class="card-btn-group">
                                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><ion-icon name="bookmark-outline"></ion-icon> Save it</a>
                            </div>
                        </div>
                        <!-- End Feature One -->
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                        <!-- Start Feature One -->
                        <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
                            <div class="d-block mb-7">
                                <a href="#"><img src="./assets/image/l1/png/feature-brand-3.png" alt=""></a>
                            </div>
                            <a href="#" class="font-size-3 d-block mb-0 text-gray">Shopify</a>
                            <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">iOS Developer</a></h2>
                            <ul class="list-unstyled mb-1 card-tag-list">
                                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <ion-icon name="pin-outline"></ion-icon> Berlyn
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
                            </ul>
                            <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
                            <div class="card-btn-group">
                                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><ion-icon name="bookmark-outline"></ion-icon> Save it</a>
                            </div>
                        </div>
                        <!-- End Feature One -->
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                        <!-- Start Feature One -->
                        <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
                            <div class="d-block mb-7">
                                <a href="#"><img src="./assets/image/l1/png/feature-brand-4.png" alt=""></a>
                            </div>
                            <a href="#" class="font-size-3 d-block mb-0 text-gray">Uber</a>
                            <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">Creative Director </a></h2>
                            <ul class="list-unstyled mb-1 card-tag-list">
                                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <ion-icon name="pin-outline"></ion-icon> Berlyn
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
                            </ul>
                            <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
                            <div class="card-btn-group">
                                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><ion-icon name="bookmark-outline"></ion-icon> Save it</a>
                            </div>
                        </div>
                        <!-- End Feature One -->
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                        <!-- Start Feature One -->
                        <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
                            <div class="d-block mb-7">
                                <a href="#"><img src="./assets/image/l1/png/feature-brand-5.png" alt=""></a>
                            </div>
                            <a href="#" class="font-size-3 d-block mb-0 text-gray">Facebook</a>
                            <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">Marketing Manager </a></h2>
                            <ul class="list-unstyled mb-1 card-tag-list">
                                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <ion-icon name="pin-outline"></ion-icon> Berlyn
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
                            </ul>
                            <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
                            <div class="card-btn-group">
                                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><ion-icon name="bookmark-outline"></ion-icon> Save it</a>
                            </div>
                        </div>
                        <!-- End Feature One -->
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                        <!-- Start Feature One -->
                        <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
                            <div class="d-block mb-7">
                                <a href="#"><img src="./assets/image/l1/png/feature-brand-6.png" alt=""></a>
                            </div>
                            <a href="#" class="font-size-3 d-block mb-0 text-gray">Oculus</a>
                            <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">Software Engineer</a></h2>
                            <ul class="list-unstyled mb-1 card-tag-list">
                                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <ion-icon name="pin-outline"></ion-icon> Berlyn
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
                            </ul>
                            <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
                            <div class="card-btn-group">
                                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><ion-icon name="bookmark-outline"></ion-icon> Save it</a>
                            </div>
                        </div>
                        <!-- End Feature One -->
                    </div>
                </div>
            </div>
        </div>
        <!-- featuredJobOne Area -->
        <!-- ContentTwo Area -->
        <!-- content-2 section -->
        <section class="py-13 py-lg-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-5 col-md-10 col-sm-11" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <div class="position-relative pr-lg-20 pr-md-15 pr-9">
                            <!-- content img start -->
                            <img src="./assets/image/l1/jpg/content-1-img2.jpg" alt="" class="w-100 rounded-4" />
                            <!-- content img end -->
                            <!-- abs-content start -->
                            <div class="pos-abs-br mb-10 ">
                                <div class="card bg-white shadow-2 border-0">
                                    <div class="card-header bg-dodger-2 text-white text-center border-0">
                                        Applicants List
                                    </div>
                                    <div class="card-body mb-n5">
                                        <!-- media start -->
                                        <div class="media mb-5 pr-9">
                                            <!-- media img start -->
                                            <div class="mr-3 mt-2">
                                                <img src="./assets/image/l1/png/media-img-1.png" class="circle-40" alt="" />
                                            </div>
                                            <!-- media img start -->
                                            <!-- media body start -->
                                            <div class="media-body pl-4">
                                                <h6 class="mb-0 font-size-4 text-black-2">Davir Mark</h6>
                                                <p class="mb-0 font-size-3 text-gray">Product Designer</p>
                                            </div>
                                            <!-- media body start -->
                                        </div>
                                        <!-- media end -->
                                        <!-- media start -->
                                        <div class="media mb-5 pr-9">
                                            <!-- media img start -->
                                            <div class="mr-3 mt-2">
                                                <img src="./assets/image/l1/png/media-img-2.png" class="circle-40" alt="" />
                                            </div>
                                            <!-- media img start -->
                                            <!-- media body start -->
                                            <div class="media-body pl-4">
                                                <h6 class="mb-0 font-size-4 text-black-2">Asley Jonshon</h6>
                                                <p class="mb-0 font-size-3 text-gray">Web Developer</p>
                                            </div>
                                            <!-- media body start -->
                                        </div>
                                        <!-- media end -->
                                        <!-- media start -->
                                        <div class="media mb-5 pr-9">
                                            <!-- media img start -->
                                            <div class="mr-3 mt-2">
                                                <img src="./assets/image/l1/png/media-img-3.png" class="circle-40" alt="" />
                                            </div>
                                            <!-- media img start -->
                                            <!-- media body start -->
                                            <div class="media-body pl-4">
                                                <h6 class="mb-0 font-size-4 text-black-2">Richar Henricks</h6>
                                                <p class="mb-0 font-size-3 text-gray">UI Designer</p>
                                            </div>
                                            <!-- media body start -->
                                        </div>
                                        <!-- media end -->
                                    </div>
                                </div>
                            </div>
                            <!-- abs-content end -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 col-xs-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                        <!-- content-2 start -->
                        <div class="content-2 pl-lg-10 pl-0 d-flex flex-column justify-content-center h-100 pt-lg-0 pt-11 pr-md-13 pr-xl-15 pr-xxl-25 pr-0">
                            <!-- content-2 section title start -->
                            <p class="text-dodger font-size-4 font-weight-semibold mb-8">
                                Looking for an expert for your company?
                            </p>
                            <h2 class="font-size-9 mb-8">
                                Get applications from the world best talents.
                            </h2>
                            <p class="text-default-color font-size-5 mb-12">
                                Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.
                            </p>
                            <!-- content-2 section title end -->
                            <a class="btn btn-green btn-h-60 text-white w-180 rounded-5 text-uppercase" href="#">Post a Job</a>
                        </div>
                        <!-- content-2 end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ContentTwo Area -->
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
                                <h2 class="text-white font-size-8 mb-4">Most comprehensive job portal in Malawi</h2>
                                <p class="text-hit-gray font-size-5 mb-0">Find 100+ job posts across Malawi everyday</p>
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
                        <h3><span class="text-green">JOB</span> FINDER</h3>
                        <!-- footer logo End -->
                        <!-- media start -->
                        <div class="mb-11">
                            <p>Download the mobile app for both iOS & Android</p>
                            <div class="media align-items-center">
                                <img src="{{ asset('img/google-play-badge.png') }}" height="70" width="150" alt="" srcset="">
                                <img src="{{ asset('img/223-2231228_app-store-apple-transprent-download-on-apple-store.png') }}" height="50" width="150" alt="" srcset="">
                            </div>
                        </div>
                        <!-- media start -->
                        <!-- widget social icon start -->
                        <div class="social-icons">
                            <ul class="pl-0 list-unstyled d-flex align-items-end ">
                                <li class="d-flex flex-column justify-content-center px-3 mr-3 font-size-4 heading-default-color">Follow us on:</li>
                                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><ion-icon name="logo-twitter"></ion-icon></a></li>
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
        <!-- footer area function end -->
    </div>
    <!-- Vendor Scripts -->
    <script src="./assets/js/vendor.min.js"></script>
    <!-- Plugin's Scripts -->
    <script src="./assets/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="./assets/plugins/nice-select/jquery.nice-select.min.js"></script>
    <script src="./assets/plugins/aos/aos.min.js"></script>
    <script src="./assets/plugins/slick/slick.min.js"></script>
    <script src="./assets/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="./assets/plugins/counter-up/jquery.waypoints.min.js"></script>
    <script src="./assets/plugins/ui-range-slider/jquery-ui.js"></script>
    <!-- Activation Script -->
    <!-- <script src="js/drag-n-drop.js"></script> -->
    <script src="./assets/js/custom.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>
