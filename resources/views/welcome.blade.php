{{-- Nextgenerations Malawi - Job Finder --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta author="KellsWorks,RodgerCodes@Nextgenerations Malawi" name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Job Finder') }}</title>

    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    @include('scripts.css')

</head>

<body>
    <div class="site-wrapper overflow-hidden ">

        @include('partials.header')

        @include('includes.auth')

        <div class="bg-gradient-1 pt-26 pt-md-32 pt-lg-33 pt-xl-35 position-relative z-index-1 overflow-hidden">

            <div class="pos-abs-tr w-50 z-index-n2">
                <img src="{{ asset('assets/image/patterns/hero-pattern.png') }}" alt="" class="gr-opacity-1">
            </div>

            <div class="container">
                <div class="row position-relative align-items-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-12 pt-lg-13 pb-lg-33 pb-xl-34 pb-md-33 pb-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <h1 class="font-size-11 mb-12 pr-md-30 pr-lg-0">Find the perfect job that you deserve.</h1>
                        <div class="">

                            <form action="/" class="search-form shadow-6">
                                <div class="filter-search-form-1 bg-white rounded-sm shadow-4">
                                    <div class="filter-inputs">
                                        <div class="form-group position-relative">
                                            <input class="form-control focus-reset pl-13" type="text" id="keyword" placeholder="Job title">
                                            <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"><ion-icon name="search-outline"></ion-icon></i></span>
                                        </div>

                                        <div class="form-group position-relative">
                                            <select name="district" id="district" class="nice-select pl-13 h-100 arrow-3 font-size-4">
                                            <option value="" data-display="Location" class="text-uppercase">Location</option>
                                            @foreach ($districts as $district)
                                                  <option value="">{{ $district->name }}</option>
                                            @endforeach
                                            </select>
                                            <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"><ion-icon name="pin-outline"></ion-icon></span>
                                        </div>

                                    </div>

                                    <div class="button-block">
                                        <button class="btn btn-primary line-height-reset h-100 btn-submit w-100 text-uppercase">Search</button>
                                    </div>

                                </div>
                            </form>

                            <p class="heading-default-color font-size-3 pt-7"><span class="text-smoke">Search keywords e.g.</span> Sales and marketer, Nurse, Accountant, Electrician etc.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 col-8 pos-abs-br z-index-n1 position-static position-md-absolute mx-auto ml-md-auto" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                        <div class="align-items-center ml-xxl-23 ml-xl-12 ml-md-7">
                            <img src="{{ asset('img/128-1282810_black-surprise-male-man-happy-black-man-png.png') }}" alt="" class="w-400" height="700">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-black-2 dark-mode-texts pt-13 pt-lg-24 pb-12 pb-lg-23">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-9 text-center text-lg-left">
                            <h5 class="font-size-5 font-weight-normal">Get hired in top companies</h5>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center justify-content-lg-between">

                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-1.png" alt="">
                    </div>

                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-2.png" alt="">
                    </div>

                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-3.png" alt="">
                    </div>

                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="700" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-4.png" alt="">
                    </div>

                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="900" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-5.png" alt="">
                    </div>

                    <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="1200" data-aos-once="true">
                        <img src="./assets/image/l1/png/brand-logo-6.png" alt="">
                    </div>
                </div>

            </div>
        </div>

        <div class="pt-11 pt-lg-26 pb-lg-16" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
            <div class="container">

                <div class="row align-items-center pb-14">

                    <div class="col-12 col-lg-6">
                        <div class="text-center text-lg-left mb-13 mb-lg-0">
                            <h2 class="font-size-9 font-weight-bold">Explore by category</h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="text-center text-lg-right">
                            <a class="btn btn-outline-green text-uppercase" href="{{ url('jobs') }}">Explore All</a>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-blue bg-blue-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <ion-icon name="business-outline"></ion-icon>
                            </div>

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Business Development</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Vacancy</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-spray bg-spray-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <ion-icon name="people-outline"></ion-icon>
                            </div>

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Customer Service</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>235</span> Vacancy</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-coral bg-coral-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-layer-group"></i>
                            </div>

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Development</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>624</span> Vacancy</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-red bg-red-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-pen-nib"></i>
                            </div>

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Design</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>174</span> Vacancy</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-orange bg-orange-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-rocket"></i>
                            </div>

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Marketing &amp; Management</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>268</span> Vacancy</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-yellow bg-yellow-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-location-arrow"></i>
                            </div>

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Sales &amp; Communication</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>156</span> Vacancy</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-turquoise bg-turquoise-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="icon icon-sidebar-2"></i>
                            </div>

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Project Management</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>162</span> Vacancy</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            <div class="text-green bg-green-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                                <i class="fa fa-user"></i>
                            </div>

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Human Resource </h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>84</span> Vacancy</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <section class="pt-7 pt-lg-16 pb-2 pb-lg-32">
            <div class="container">
                <div class="row pb-lg-6 justify-content-center">
                    <div class="col-xl-6 col-lg-5 col-md-10 col-sm-11" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">

                        <div class="position-relative pr-xl-20 pr-md-15 pr-15">

                            <img src="{{ asset('assets/image/l1/jpg/content-1-img1.jpg') }}" alt="" class="w-100 rounded overflow-hidden" />

                            <div class="pos-abs-br pt-17 pb-9 pl-8 pr-12  bg-white shadow-2 rounded scale-p7 scale-xs-1 mb-n20 mr-n10 mr-xs-5 mr-sm-0 mb-xs-n10">

                                <span class="pos-abs-tl circle-79 bg-green font-size-9 mt-n9 ml-n9 ">
                                <i class="fas fa-check text-white"></i>
                                </span>

                                <p class="text-black-2 text-4 font-weight-bold mb-7">
                                    <span class="font-weight-normal">Found</span> {{ count($jobs)-1 }}+ Jobs
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

                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-8" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">

                        <div class="pl-lg-10 pl-0 d-flex flex-column justify-content-center h-100 pt-lg-0 pt-15 pr-md-13 pr-xl-15 pr-xxl-25 pr-0 ">

                            <h2 class="font-size-9 mb-8 pr-xxl-15">
                                Help you to get the best job that fits you
                            </h2>
                            <p class="text-gray font-size-5 mb-10 mb-lg-16">
                                Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approach
                            </p>

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

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="pt-11 pt-lg-27 pb-7 pb-lg-26 bg-black-2 dark-mode-texts">
            <div class="container">

                <div class="row align-items-center pb-14">

                    <div class="col-12 col-xl-6 col-lg-6">
                        <div class="text-center text-lg-left mb-13 mb-lg-0">
                            <h2 class="font-size-9 font-weight-bold">Featured Jobs</h2>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6 col-lg-6">
                        <div class="text-center text-lg-right">
                            <a class="btn btn-outline-white text-uppercase" href="{{ url('jobs') }}">Explore All</a>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    @foreach ($jobs as $job)
                    <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">

                        <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
                            <div class="d-block mb-7  mx-auto align-items-center">
                                <a href="#"><img class="img-fluid" src="{{ asset('img/companies/'.$job->employer_logo) }}"  alt=""></a>
                            </div>
                            <a href="#" class="font-size-3 d-block mb-0 text-gray">{{ $job->employer }}</a>
                            <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">{{ $job->title }}</a></h2>
                            <ul class="list-unstyled mb-1 card-tag-list">
                                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                                <ion-icon name="pin-outline"></ion-icon>{{ $job->location }}
                            </a></li>
                                            <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                                <i class="fa fa-briefcase mr-2 font-weight-bold"></i>{{ $job->duration }}
                            </a></li>
                                            <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                                <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i>{{ $job->salary }}
                            </a></li>
                            </ul>
                            <p class="mb-7 font-size-4 text-gray">{{ $job->description }}</p>
                            <div class="card-btn-group">
                                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="{{ route('single-job', [$job->title]) }}">Apply Now</a>
                                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><ion-icon name="bookmark-outline"></ion-icon> Save it</a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

        <section class="py-13 py-lg-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-5 col-md-10 col-sm-11" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <div class="position-relative pr-lg-20 pr-md-15 pr-9">

                            <img src="./assets/image/l1/jpg/content-1-img2.jpg" alt="" class="w-100 rounded-4" />

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

        @include('partials.footer')

        <div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="notice d-flex justify-content-between align-items-center">
                    <div class="cookie-text">This website uses cookies to personalize content and analyse traffic in order to offer you a better experience.</div>
                    <div class="buttons d-flex flex-column flex-lg-row">
                      <a href="#a" class="btn btn-success btn-sm" data-dismiss="modal">I accept</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @include('cookieConsent::index')

    </div>
    @include('scripts.js')
</body>

</html>
