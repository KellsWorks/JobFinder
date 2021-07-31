{{-- Nextgenerations Malawi - Copyright - Job Finder --}}
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

        @include('cookieConsent::index')

        @include('includes.auth')


        <div class="bg-gradient-1 pt-26 pt-md-32 pt-lg-33 pt-xl-35 position-relative z-index-1 overflow-hidden">

            <div class="pos-abs-tr w-50 z-index-n2">
                <img src="{{ asset('assets/image/patterns/hero-pattern.png') }}" alt="hero-pattern" class="gr-opacity-1">
            </div>


            <div class="container">

                @if (session('auth-error'))
                <div class="alert alert-danger" id="session-alert">
                    {{ session('auth-error') }}
                    </div>
                @endif

                <div class="row position-relative align-items-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-12 pt-lg-13 pb-lg-33 pb-xl-34 pb-md-33 pb-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <h1 class="font-size-11 mb-12 pr-md-30 pr-lg-0">{{ __('messages.info_banner') }}</h1>
                        <div class="">

                            <form action="{{ route('job-search') }}" method="GET" class="search-form shadow-6">
                                <div class="filter-search-form-1 bg-white rounded-sm shadow-4">
                                    <div class="filter-inputs">
                                        <div class="form-group position-relative">
                                            <input class="form-control focus-reset pl-13" name="query" type="text" id="keyword" placeholder="{{ __('messages.job_title') }}">
                                            <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center text-green justify-content-center font-size-6"><ion-icon name="search-outline"></ion-icon></i></span>
                                        </div>

                                        <div class="form-group position-relative">
                                            <select name="location" id="location" class="nice-select font-size-4 pl-13 arrow-3">
                                            <option  data-display="{{ __('messages.city_district') }}">City or district</option>
                                            @foreach ($districts as $district)
                                                <option value="{{ $district->name }}">{{ $district->name }}</option>
                                            @endforeach
                                            </select>
                                            <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center text-green justify-content-center font-size-6"><ion-icon name="pin-outline"></ion-icon></span>
                                        </div>

                                    </div>

                                    <div class="button-block">
                                        <button class="btn btn-primary line-height-reset h-100 btn-submit w-100 text-uppercase">{{ __('messages.search') }}</button>
                                    </div>

                                </div>
                            </form>

                            <p class="heading-default-color font-size-3 pt-7"><span class="text-smoke">{{ __('messages.search_head') }}</span>{{ __('messages.search_note') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 col-8 pos-abs-br z-index-n1 position-static position-md-absolute mx-auto ml-md-auto" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                        <div class="align-items-center ml-xxl-23 ml-xl-12 ml-md-7">
                            <img src="{{ asset('img/128-1282810_black-surprise-male-man-happy-black-man-png.png') }}" alt="" class="img-fluid">
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
              <!-- Brand Logos -->
              <div class="row align-items-center justify-content-center justify-content-lg-between">


                @foreach ($jobs->take(3) as $job)
                <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-once="true">
                    <img class="img-fluid" src="{{ asset('img/companies/'.$job->employer_logo) }}" alt="employers-logo">
                </div>
                @endforeach


              </div>
              <!-- End Brand Logos -->
            </div>
          </div>

        <div class="pt-11 pt-lg-24 pb-11 pb-lg-24">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">

                        <div class="section-title text-center pb-lg-15 pb-8 px-xxl-10">
                            <h2 class="mb-9 font-size-10">Quick career tips</h2>
                            <p class="text-default-color font-size-4">Read more about setting up a job career</p>
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-xl-4 col-md-6 mb-xl-0 mb-13" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">

                        <div class="card bg-transparent border-0">

                            <img src="{{ asset('assets/image/l1/png/blog-img1.png') }}" class="card-img-top" alt="...">

                            <div class="card-body pt-11 px-0 pb-0">
                                <a href="#" class="badge badge-green text-uppercase font-size-3 font-weight-bold px-4 py-1">CV Writing</a>
                                <h4><a class="card-title font-size-7 mt-8 mb-6 heading-default-color" href="#">How to make a perfect CV that attracts the attention </a></h4>
                                <p class="card-text mb-9 font-size-4">Learn how to build an impressive curiculum vitae that will potentiate you for success in your job applications.</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-xl-4 col-md-6 mb-xl-0 mb-13" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">

                        <div class="card bg-transparent border-0">

                            <a href="#"><img src="{{ asset('assets/image/l1/png/blog-img2.png') }}" class="card-img-top" alt="..."></a>

                            <div class="card-body pt-11 px-0 pb-0">
                                <a href="#" class="badge badge-green text-uppercase font-size-3 font-weight-bold px-4 py-1">Marketing yourself</a>
                                <h4><a class="card-title font-size-7 mt-8 mb-6 heading-default-color" href="#">Out bound marketing of your skillsets to get the job you want within 72 days</a></h4>
                                <p class="card-text mb-9 font-size-4">Add skillsets to increase your chances of being selected in one or acouple of your job applications</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-xl-4 col-md-6" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">

                        <div class="card bg-transparent border-0">

                            <a href="#"><img src="{{ asset('assets/image/l1/png/blog-img3.png') }}" class="card-img-top" alt="..."></a>

                            <div class="card-body pt-11 px-0 pb-0">
                                <a href="#" class="badge badge-green text-uppercase font-size-3 font-weight-bold px-4 py-1">Social media</a>
                                <h4><a class="card-title font-size-7 mt-8 mb-6 heading-default-color" href="#">Your social media accounts will be your new CV</a></h4>
                                <p class="card-text mb-9 font-size-4">Social media platforms are another way of catching potential job employees. Like and follow pages on Facebook, Twitter, Instagram</p>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class=" pb-12 pb-lg-23">
            <div class="container">

                <section class="how-it-works">
                    <div class="container">
                        <div class="row" data-aos="fade-up">
                            <div class="col-md-12">
                                <div class="main-heading">
                                    <h2>How It <span>Works</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="working-process"><span class="process-img"><img src="{{ asset('img/add-user.png') }}" height="100" width="100" alt="step-1-image"/><span class="process-num">01</span></span>
                                    <h4>Create an Account</h4>
                                    <p class="font-size-4">Create a <span class="text-green">Job</span> Finder account for free and get started.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="working-process"><span class="process-img"><img src="{{ asset('img/loupe.png') }}" height="100" width="100" alt="step-2-image"/><span class="process-num">02</span></span>
                                    <h4>Search Jobs</h4>
                                    <p class="font-size-4">Search for job(s) of your choice. We'll quickly match you with the right jobs right at the spot.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="working-process"><span class="process-img"><img src="{{ asset('img/download.png') }}" height="100" width="100" alt="step-3-image"/><span class="process-num">03</span></span>
                                    <h4>Save & Apply</h4>
                                    <p class="font-size-4">Follow up a job for more updates and apply if you are interested in the job with just click of a button.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <div class="pb-lg-16" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
            <div class="container">

                <div class="row align-items-center pb-14">

                    <div class="col-12 col-lg-6">
                        <div class="text-center text-lg-left mb-13 mb-lg-0">
                            <h2 class="font-size-9 font-weight-bold">Explore by category</h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="text-center text-lg-right">
                            <a class="btn btn-outline-green text-uppercase" href="{{ route('jobs') }}">Explore All</a>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">

                    @foreach ($categories->take(8) as $category)
                    <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
                        <a href="{{ url('explore-by-category/'.$category->id) }}" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
                            @foreach ($category->icons as $item)
                            <div class="text-green bg-{{ $item->color }}-opacity-1 square-70 rounded-4 mb-7 font-size-7">

                                <ion-icon name="{{ $item->icon }}" size="large"></ion-icon>

                            </div>
                            @endforeach

                            <div class="">
                                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">{{ $category->category }}</h5>
                                <p class="font-size-4 font-weight-normal text-gray"><span>{{ $category->jobs->count() }}</span> Vacancy</p>
                            </div>
                        </a>
                    </div>
                    @endforeach

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
                                    <span class="font-weight-normal">Found</span> {{ $jobs->count()-1 }}+ Jobs
                                </p>
                                <div class="d-flex">
                                    <ul class="list-unstyled list-overlapped-icon max-width-130px">

                                        @foreach ($jobs->take(3) as $job)
                                        <li class="ml-0">
                                            <a href="" class="circle-40">
                                            <img class="circle-40 img" src="{{ asset('img/companies/'.$job->employer_logo) }}" alt="" />
                                            </a>
                                        </li>
                                        @endforeach



                                    </ul>

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
                                We bring the job market right to your fingertips. Save job searching time now.
                            </p>

                            <ul class="list-unstyled pl-0">
                                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                                    <i class="fas fa-check font-size-4 text-green mr-6"></i>More than 20+ jobs posted everyday
                                </li>
                                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                                    <i class="fas fa-check font-size-4 text-green mr-6"></i>Our newsletters keeps you updated
                                </li>
                                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                                    <i class="fas fa-check font-size-4 text-green mr-6"></i>We are on all platforms: Web, Android & iOS
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
                    @foreach ($jobs->take(3) as $job)
                    <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">

                        <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
                            <div class="d-block mb-7  mx-auto align-items-center">
                                <a href="#"><img class="img-fluid" src="{{ asset('img/companies/'.$job->employer_logo) }}"  alt=""></a>
                            </div>
                            <a href="#" class="font-size-3 d-block mb-0 text-gray">{{ $job->employer }}</a>
                            <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">{{ $job->title }}</a></h2>
                            <ul class="list-unstyled mb-1 card-tag-list">
                                <li><a href="" class="bg-regent-opacity-15 text-gray font-size-3 rounded-3">
                                <ion-icon name="pin-outline" size="small"></ion-icon>{{ $job->location }}
                            </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-gray font-size-3 rounded-3">
                                <i class="fa fa-briefcase mr-2 font-weight-bold"></i>{{ $job->duration }}
                            </a></li>
                                <li><a href="" class="bg-regent-opacity-15 text-gray font-size-3 rounded-3">
                                <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i>{{ $job->salary }}
                            </a></li>
                            </ul>
                            <p class="mb-7 font-size-4 text-gray">{{ $job->description }}</p>
                            <div class="card-btn-group">
                                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="{{ url('job/'.$job->slug) }}">view</a>
                                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#">Save it</a>
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
                   <div class="row py-5" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                            <div class="col">
                                <div class="card border-0">
                                    <div class="card-body text-center ">
                                        <h2><b>Subscribe to our newsletters</b></h2>
                                        <p class="pl-0 ml-0 mb-5 font-size-4">Get daily updates on different malawian jobs posted here.</p>
                                        <div class="row text-center justify-content-center">
                                            <div class="col-auto">
                                                <form action="{{ route('newsletter') }}" method="POST">
                                                    @csrf
                                                <div class="input-group mb-5 font-size-4"><input  required type="email" name="newsletter_email" class="form-control" placeholder="Enter your e-mail address" aria-label="Email address" aria-describedby="button-addon2">
                                                    <div class="input-group-append"><button style="width: 100%" class="pt-7 pb-8 btn btn-primary text-uppercase font-size-3" type="submit" id="button-addon2"> <b>Submit</b></button></div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </section>

        @include('partials.footer')
        @include('includes.newsletter')

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

    </div>

    @include('scripts.js')

    @if (session('newsletter'))
    <script>
        $( function() {
            $( "#dialog" ).dialog();
            } );
    </script>
    @endif

    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/60e35d47d6e7610a49a9bf1f/1f9s28oli';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>

</body>

</html>
