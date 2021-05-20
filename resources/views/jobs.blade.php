<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    @include('scripts.css')

</head>

<body>
    <div class="site-wrapper overflow-hidden ">

        <header class="site-header bg-white site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
            <div class="container">
                <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">

                    <div class="brand-logo">
                        <a href="{{ route('home') }}">
                            <h3>
                                <span class="text-green">JOB</span> FINDER
                            </h3>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="mobile-menu">
                        <div class="navbar-nav-wrapper">
                            <ul class="navbar-nav main-menu">

                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link" aria-expanded="false">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="{{ route('jobs') }}" class="nav-link">JOBS</a>
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
                        @if(Route::has('login'))
                        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
                        @auth
                        {{-- <a class="text-uppercase font-size-3 text-green ml-6" href="#">
                            {{ Auth::user()->name }}
                        </a> --}}
                        @else
                        <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset" href="javacript:" data-toggle="modal" data-target="#login">
                            {{ __('Login') }}
                        </a>
                        @if (Route::has('register'))
                        <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#signup">
                            {{ __('Register') }}
                        </a>
                        @endif
                    @endauth
                    </div>
                    @endif
                    </div>

                    <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="hamburger hamburger--squeeze js-hamburger">
                    <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                    </span>
                    </span>
                    </button>

                    @auth
                        <div class=" ml-auto ml-lg-5 pl-2 d-none d-xs-flex align-items-center">
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
                                        <img class="circle-40" height="40" src="../../../storage/profiles/avatar5.png" alt="">
                                    </div>
                                    <i class="fas fa-chevron-down heading-default-color ml-6"></i>
                                </a>
                                <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-auto bg-default" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="dashboard-settings.html">Settings </a>
                                    <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="candidate-profile-main.html">Edit Profile</a>
                                    <a class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="#"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Log out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth

                </nav>
            </div>
        </header>


        @include('includes.auth')


        <div class="bg-default-1 pt-26 pt-lg-28 pb-13 pb-lg-25">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-5 col-xs-8">

                        <div class="widgets mb-11">
                            <h4 class="font-size-6 font-weight-semibold mb-6">Job Type</h4>
                            <ul class="list-unstyled filter-check-list">
                                <li class="mb-2"><a href="#" class="toggle-item">Full Time</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Part Time</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Contract</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Internship</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Temporary</a></li>
                            </ul>
                        </div>
                        <div class="widgets mb-11 ">
                            <div class="d-flex align-items-center pr-15 pr-xs-0 pr-md-0 pr-xl-22">
                                <h4 class="font-size-6 font-weight-semibold mb-6 w-75">Salary Range</h4>

                                <div class="slider-price w-25 text-right mr-7">
                                    <p class="font-weight-bold">
                                        <input class="text-primary font-weight-semibold font-size-4 focus-reset" type="text" id="amount" readonly="">
                                    </p>
                                </div>
                            </div>
                            <div class="graph text-center mx-0 mt-5 position-relative chart-postion">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="range-slider">
                                <div class="pm-range-slider"></div>
                            </div>
                        </div>
                        <div class="widgets mb-11">
                            <h4 class="font-size-6 font-weight-semibold mb-6">Job skills </h4>
                            <ul class="list-unstyled filter-check-list">
                                <li class="mb-2"><a href="#" class="toggle-item">All</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Senior</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Mid</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Junior</a></li>
                            </ul>
                        </div>
                        <div class="widgets mb-11">
                            <h4 class="font-size-6 font-weight-semibold mb-6">Posted Time</h4>
                            <ul class="list-unstyled filter-check-list">
                                <li class="mb-2"><a href="#" class="toggle-item">Anytime</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Today</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Yesterday</a></li>
                                <li class="mb-2"><a href="#" class="toggle-item">Last week</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-12 col-xl-8 col-lg-8">

                        <form action="{{ route('job-search') }}" method="GET" class="search-form">

                            <div class="filter-search-form-2 search-1-adjustment bg-white rounded-sm shadow-7 pr-6 py-6 pl-6">
                                <div class="filter-inputs">
                                    <div class="form-group position-relative w-lg-45 w-xl-40 w-xxl-45">
                                        <input class="form-control focus-reset pl-13" type="text" name="query" id="keyword" placeholder="Type here...">
                                        <span class="h-100 w-px-50 text-green pos-abs-tl d-flex align-items-center justify-content-center font-size-6">
                                            <ion-icon name="search-outline"></ion-icon></i>
                                    </span>
                                    </div>

                                    <div class="form-group position-relative w-lg-55 w-xl-60 w-xxl-55">
                                        <select name="country" id="country" class="nice-select font-size-4 pl-13 h-100 arrow-3">
                                        <option data-display="City, district">City or district</option>
                                        @foreach ($districts as $district)
                                            <option value="">{{ $district->name }}</option>
                                        @endforeach
                                        </select>
                                        <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center text-green justify-content-center font-size-6"><ion-icon name="pin-outline"></ion-icon></span>
                                    </div>

                                </div>
                                <div class="button-block">
                                    <button class="btn btn-primary line-height-reset h-100 btn-submit w-100 text-uppercase">Search</button>
                                </div>
                            </div>
                        </form>
                        <div class="pt-12">
                            <div class="d-flex align-items-center justify-content-between mb-6">
                                <h5 class="font-size-4 font-weight-normal text-gray">
                                    <span class="heading-default-color">Showing <b>{{ $jobs->count() }}</b></span> results
                                </h5>
                                <div class="d-flex align-items-center result-view-type">
                                    <a class="heading-default-color pl-5 font-size-6 hover-text-hitgray active" href="./search-list-1.html">
                                        <i class="fa fa-list-ul"></i>
                                    </a>
                                                        <a class="heading-default-color pl-5 font-size-6 hover-text-hitgray" href="./search-grid.html">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                </div>
                            </div>

                            @forelse ($jobs as $job)
                            <div class="mb-8">

                                <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 " >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="media align-items-center">
                                                <div class="square-72 d-block mr-8">
                                                    <img class="img-fluid" src="{{ asset('img/companies/'.$job->employer_logo) }}" alt="">
                                                </div>
                                                <div>
                                                    <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="{{ url('/job/'.$job->id) }}">{{ $job->title }}</a></h3>
                                                    <a href="#" class="font-size-3 text-default-color line-height-2">{{ $job->employer }}</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row pt-8">
                                        <div class="col-md-7">
                                            <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                                @foreach ($job->tags as $item)
                                                <li>
                                                    <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">{{ $item->tag }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-md-5">
                                            <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                                <li class="mt-2 mr-4 font-size-small text-black-2 d-flex">
                                                    <span class="mr-4" style="margin-top: -2px"><img src="{{ asset('assets/image/svg/icon-loaction-pin-black.svg') }}" alt=""></span>
                                                    <span class="font-weight-semibold">{{ $job->location }}</span>
                                                </li>
                                                <li class="mt-2 mr-4 font-size-small text-black-2 d-flex">
                                                    <span class="mr-4" style="margin-top: -2px"><img src="{{ asset('assets/image/svg/icon-suitecase.svg') }}" alt=""></span>
                                                    <span class="font-weight-semibold">{{ $job->duration }}</span>
                                                </li>
                                                <li class="mt-2 mr-4 font-size-small text-black-2 d-flex">
                                                    <span class="mr-4" style="margin-top: -2px"><img src="{{ asset('assets/image/svg/icon-clock.svg') }}" alt=""></span>
                                                    <span class="font-weight-semibold">{{ \Carbon\Carbon::parse($job->updated_at)->diffForHumans() }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="align-items-center">
                                <p class="text-center font-size-4 text-black-2">
                                    No search results for <span class="text-red">{{ request()->query('query') }}</span>
                                </p>
                                <p class="text-center">
                                    <span>
                                        <img src="{{ asset('img/Delivery _ order, account, transportation, subway, box, shopping.png') }}" alt="" class="img-fluid center">
                                    </span>
                                </p>

                            </div>
                            @endforelse

                            <div class="text-center pt-5 pt-lg-13">
                                <a class="text-green font-weight-bold text-uppercase font-size-3" href="#">
                                Load More <i class="fas fa-sort-down ml-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>

    @include('scripts.js')

</body>

</html>
