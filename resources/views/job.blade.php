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
                                    <a class="nav-link" aria-expanded="false">Home</a>
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

        <div class="jobDetails-section bg-default-1 pt-28 pt-lg-27 pb-xl-25 pb-12">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-11 mt-4 ml-xxl-32 ml-xl-15 dark-mode-texts">
                        <div class="mb-9">
                            <a class="d-flex align-items-center ml-4" href="javascript:history.back()">
                                <ion-icon name="arrow-back-outline"></ion-icon><span class="text-uppercase font-size-3 font-weight-bold text-gray">Back</span></a>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-11 mb-8 px-xxl-15 px-xl-0">
                        <div class="bg-white rounded-4 border border-mercury shadow-9">

                            <div class="pt-9 pl-sm-9 pl-5 pr-sm-9 pr-5 pb-8 border-bottom border-width-1 border-default-color light-mode-texts">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="media align-items-center">

                                            <div class="square-72 d-block mr-8 pt-4 ml-3 justify-content-center">
                                                <img class="img-responsive mt-4 center" height="21" src="{{ asset('img/companies/'.$jobs->employer_logo)}}" alt="">
                                            </div>

                                            <div>
                                                <h3 class="font-size-6 mb-0">{{ $jobs->title }}</h3>
                                                <span class="font-size-3 text-gray line-height-2">{{ $jobs->employer }}</span>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6 text-right pt-7 pt-md-0 mt-md-n1">

                                        <div class="media justify-content-md-end">
                                            <p class="d-flex font-size-2 text-green font-weight-bold">{{ \Carbon\Carbon::parse($jobs->created_at)->diffForHumans() }}</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row pt-9">
                                    <div class="col-12">

                                        <div class="card-btn-group">
                                            <a class="btn btn-green text-uppercase btn-medium rounded-3 w-180 mr-4 mb-5" href="#">Apply to this job</a>
                                            <a class="btn btn-outline-mercury text-black-2 text-uppercase h-px-48 rounded-3 mr-4 mb-5 px-5" href="#">
                                            Save job</a>
                                            <a id="like" onclick="liked()" class="btn btn-outline-mercury text-uppercase h-px-48 rounded-3 mb-5 px-5" href="javascript:">
                                                <span class="text-red mt-2"><ion-icon name="heart"></ion-icon></i> </span>  {{ $likes }}</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="job-details-content pt-8 pl-sm-9 pl-6 pr-sm-9 pr-6 pb-10 border-bottom border-width-1 border-default-color light-mode-texts">
                                <div class="row mb-7">
                                    <div class="col-md-4 mb-md-0 mb-6">
                                        <div class="media justify-content-md-start">
                                            <div class="image mr-5">
                                                <img src="{{ asset('assets/image/svg/icon-dolor.svg') }}" alt="">
                                            </div>
                                            <p class="font-weight-semibold font-size-5 text-black-2 mb-0">{{ $jobs->salary }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-lg-0 pl-lg-10 mb-md-0 mb-6">
                                        <div class="media justify-content-md-start">
                                            <div class="image mr-5">
                                                <img src="{{ asset('assets/image/svg/icon-briefcase.svg') }}" alt="">
                                            </div>
                                            <p class="font-weight-semibold font-size-5 text-black-2 mb-0">{{ $jobs->duration }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-lg-0">
                                        <div class="media justify-content-md-start">
                                            <div class="image mr-5">
                                                <img src="{{ asset('assets/image/svg/icon-location.svg') }}" alt="">
                                            </div>
                                            <p class="font-weight-semibold font-size-5 text-black-2 mb-0">{{ $jobs->location }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-lg-0 mb-10">
                                        <div class="">
                                            <span class="font-size-4 d-block mb-4 text-gray">Career Level</span>
                                            <h6 class="font-size-5 text-black-2 font-weight-semibold mb-9">Project Manangement</h6>
                                        </div>
                                        <div class="tags">
                                            <p class="font-size-4 text-gray mb-0">Essential skills</p>
                                            <ul class="list-unstyled mr-n3 mb-0">

                                                @forelse ($skills as $skill)
                                                <li class="d-block font-size-4 text-black-2 mt-2">
                                                    <span class="d-inline-block mr-2">•</span>{{ $skill->name }}
                                                </li>
                                                @empty
                                                <p class="text-red font-size-3 font-weight-bold">
                                                    No essential skills available for this job
                                                </p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-lg-0 pl-lg-10 mb-lg-0 mb-8">
                                        <div class="">
                                            <span class="font-size-4 d-block mb-4 text-gray">Type of corporation</span>
                                            <h6 class="font-size-5 text-black-2 font-weight-semibold mb-9">Government</h6>
                                        </div>
                                        <div class="tags">
                                            <p class="font-size-4 text-gray mb-3">Related tags</p>
                                            <ul class="d-flex list-unstyled flex-wrap pr-sm-25 pr-md-0">
                                                @forelse ($tags as $item)
                                                <li class="bg-regent-opacity-15 mr-3 h-px-33 text-center flex-all-center rounded-3 px-5 font-size-3 text-black-2 mt-2">
                                                    {{ $item->tag }}
                                                </li>
                                                @empty
                                                  <p class="text-red font-size-3 font-weight-bold">
                                                   No tags available for this job
                                                   </p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-lg-0 pl-lg-10 mb-lg-0 mb-8">
                                        <div class="">
                                            <span class="font-size-4 d-block mb-4 text-gray">Company size</span>
                                            <h6 class="font-size-5 text-black-2 font-weight-semibold mb-9">11-50 employees</h6>
                                        </div>
                                        <div class="tags">
                                            <p class="font-size-4 text-gray mb-3">Qualifications</p>
                                            <ul class="d-flex list-unstyled flex-wrap pr-sm-25 pr-md-0">
                                                @forelse ($qualifications as $item)
                                                <li class="bg-regent-opacity-15 mr-3 h-px-33 text-center flex-all-center rounded-3 px-5 font-size-3 text-black-2 mt-2">
                                                    {{ $item->name }}
                                                </li>
                                                @empty
                                                  <p class="text-red font-size-3 font-weight-bold">
                                                   No qualifications available for this job
                                                   </p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-details-content pt-8 pl-sm-9 pl-6 pr-sm-9 pr-6 pb-10 light-mode-texts">
                                <div class="row">
                                    <div class="col-xl-11 col-md-12 pr-xxl-9 pr-xl-10 pr-lg-20">
                                        <div class="">
                                            <p class="mb-4 font-size-4 text-gray font-weight-semibold">Job Description</p>
                                            <p class="font-size-4 text-black-2">{{ $jobs->description }}</p>
                                        </div>
                                        <div class="">

                                            <p class="font-size-4 text-black-2 com-text">
                                                {{ $jobs->content }}
                                            </p>

                                            <a class="btn btn-green text-uppercase btn-medium w-180 h-px-48 rounded-3 mr-4 mt-6" href="#">Apply to this job</a>
                                        </div>
                                    </div>
                                </div>
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
