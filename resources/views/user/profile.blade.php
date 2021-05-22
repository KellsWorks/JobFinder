{{-- Copyright (c) Nextgenerations Malawi --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta author="KellsWorks,RodgerCodes@NextgenerationsMalawi" name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('icon.ico') }}" type="image/x-icon">

    @include('scripts.css')

</head>

<body>
    <div class="site-wrapper overflow-hidden ">

        @include('partials.header')

        @include('includes.auth')


        <div class="bg-default-2 pt-22 pt-lg-25 pb-13 pb-xxl-32">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-12 dark-mode-texts">
                        <div class="mb-9">
                            <a class="d-flex align-items-center ml-4" href="javascript:history.back()">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            <span class="text-uppercase font-size-3 font-weight-bold text-gray">Back</span></a>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-xxl-3 col-lg-4 col-md-5 mb-11 mb-lg-0">
                        <div class="pl-lg-5">

                            <div class="bg-white shadow-9 rounded-4">
                                <div class="px-5 py-11 text-center border-bottom border-mercury">
                                    <a class="mb-4" href="#"><img class="circle-54" src="../../../storage/profiles/avatar5.png" alt=""></a>
                                    <h4 class="mb-0"><a class="text-black-2 font-size-6 font-weight-semibold" href="#">David Henricks</a></h4>
                                    <p class="mb-8"><a class="text-gray font-size-4" href="#">Product Designer</a></p>
                                    <div class="icon-link d-flex align-items-center justify-content-center flex-wrap">
                                        <a class="text-smoke circle-32 bg-concrete mr-5 hover-bg-green" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="text-smoke circle-32 bg-concrete mr-5 hover-bg-green" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="text-smoke circle-32 bg-concrete mr-5 hover-bg-green" href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>

                                <div class="px-9 pt-lg-5 pt-9 pt-xl-9 pb-5">
                                    <h5 class="text-black-2 mb-8 font-size-5">Contact information</h5>

                                    <div class="mb-7">
                                        <p class="font-size-4 mb-0">Location</p>
                                        <h5 class="font-size-4 font-weight-semibold mb-0 text-black-2 text-break">New York , USA</h5>
                                    </div>

                                    <div class="mb-7">
                                        <p class="font-size-4 mb-0">E-mail</p>
                                        <h5 class="font-size-4 font-weight-semibold mb-0"><a class="text-black-2 text-break" href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></h5>
                                    </div>

                                    <div class="mb-7">
                                        <p class="font-size-4 mb-0">Phone</p>
                                        <h5 class="font-size-4 font-weight-semibold mb-0"><a class="text-black-2 text-break" href="tel:+999565562">+265 99 363 48 27</a></h5>
                                    </div>

                                    <div class="mb-7">
                                        <p class="font-size-4 mb-0">Website Linked</p>
                                        <h5 class="font-size-4 font-weight-semibold mb-0"><a class="text-break" href="#">www.github.com</a></h5>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xxl-6 col-lg-8 col-md-7 order-2 order-xl-1">
                        <div class="bg-white rounded-4 shadow-9">

                            <ul class="nav border-bottom border-mercury pl-12" id="myTab" role="tablist">
                                <li class="tab-menu-items nav-item pr-12">
                                    <a class="active text-uppercase font-size-3 font-weight-bold text-default-color py-3" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Activity</a>
                                </li>
                                <li class="tab-menu-items nav-item pr-12">
                                    <a class="text-uppercase font-size-3 font-weight-bold text-default-color py-3" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    <div class="pr-xl-0 pr-xxl-14 p-5 px-xs-12 pt-7 pb-5">
                                        <h4 class="font-size-6 mb-7 mt-5 text-black-2 font-weight-semibold">About</h4>
                                        <p class="font-size-4 mb-8">A talented professional with an academic background in IT and proven commercial development experience as C++ developer since 1999. Has a sound knowledge of the software development life cycle. Was involved in more
                                            than 140 software development outsourcing projects.</p>
                                        <p class="font-size-4 mb-8">Programming Languages: C/C++, .NET C++, Python, Bash, Shell, PERL, Regular expressions, Python, Active-script.</p>
                                    </div>

                                    <div class="border-top pr-xl-0 pr-xxl-14 p-5 pl-xs-12 pt-7 pb-5">
                                        <h4 class="font-size-6 mb-7 mt-5 text-black-2 font-weight-semibold">Skills</h4>
                                        <ul class="list-unstyled d-flex align-items-center flex-wrap">
                                            <li>
                                                <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Agile</a>
                                            </li>
                                            <li>
                                                <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Wireframing</a>
                                            </li>
                                            <li>
                                                <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Prototyping</a>
                                            </li>
                                            <li>
                                                <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Information</a>
                                            </li>
                                            <li>
                                                <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Waterfall Model</a>
                                            </li>
                                            <li>
                                                <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">New Layout</a>
                                            </li>
                                            <li>
                                                <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Browsing</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Skills End -->
                                    <!-- Card Section Start -->
                                    <div class="border-top p-5 pl-xs-12 pt-7 pb-5">
                                        <h4 class="font-size-6 mb-7 mt-5 text-black-2 font-weight-semibold">Work Exprerience</h4>
                                        <!-- Single Card -->
                                        <div class="w-100">
                                            <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                                <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                                                    <img src="./image/l2/png/featured-job-logo-1.png" alt="">
                                                </div>
                                                <div class="w-100 mt-n2">
                                                    <h3 class="mb-0">
                                                        <a class="font-size-6 text-black-2 font-weight-semibold" href="#">Lead Product Designer</a>
                                                    </h3>
                                                    <a href="#" class="font-size-4 text-default-color line-height-2">Airabnb</a>
                                                    <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                                        <a href="" class="font-size-4 text-gray mr-5">Jun 2017 - April 2020- 3 years</a>
                                                        <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>New York, USA</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Card End -->
                                        <!-- Single Card -->
                                        <div class="w-100">
                                            <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                                <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                                                    <img src="./image/l1/png/feature-brand-1.png" alt="">
                                                </div>
                                                <div class="w-100 mt-n2">
                                                    <h3 class="mb-0">
                                                        <a class="font-size-6 text-black-2 font-weight-semibold" href="#">Senior UI/UX Designer</a>
                                                    </h3>
                                                    <a href="#" class="font-size-4 text-default-color line-height-2">Google Inc</a>
                                                    <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                                        <a href="" class="font-size-3 text-gray mr-5">Jun 2017 - April 2020- 3 years</a>
                                                        <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>New York, USA</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Card End -->
                                    </div>
                                    <!-- Card Section End -->
                                    <!-- Card Section Start -->
                                    <div class="border-top p-5 pl-xs-12 pt-7 pb-5">
                                        <h4 class="font-size-6 mb-7 mt-5 text-black-2 font-weight-semibold">Education</h4>
                                        <!-- Single Card -->
                                        <div class="w-100">
                                            <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                                <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                                                    <img src="./image/svg/harvard.svg" alt="">
                                                </div>
                                                <div class="w-100 mt-n2">
                                                    <h3 class="mb-0">
                                                        <a class="font-size-6 text-black-2" href="#">Masters in Art Design</a>
                                                    </h3>
                                                    <a href="#" class="font-size-4 text-default-color line-height-2">Harvard University</a>
                                                    <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                                        <a href="" class="font-size-3 text-gray mr-5">Jun 2017 - April 2020- 3 years</a>
                                                        <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>Brylin, USA</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Card End -->
                                        <!-- Single Card -->
                                        <div class="w-100">
                                            <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                                <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                                                    <img src="./image/svg/mit.svg" alt="">
                                                </div>
                                                <div class="w-100 mt-n2">
                                                    <h3 class="mb-0">
                                                        <a class="font-size-6 text-black-2" href="#">Bachelor in Software Engineering </a>
                                                    </h3>
                                                    <a href="#" class="font-size-4 text-default-color line-height-2">Manipal Institute of Technology</a>
                                                    <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                                        <a href="" class="font-size-3 text-gray mr-5">Fed 2012 - April 2016 - 4 years</a>
                                                        <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>New York, USA</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Card End -->
                                    </div>
                                    <!-- Card Section End -->
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <!-- Excerpt Start -->
                                    <div class="pr-xl-11 p-5 pl-xs-12 pt-9 pb-11">
                                        <form action="/">
                                            <div class="row">
                                                <div class="col-12 mb-7">
                                                    <label for="name3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Your Name</label>
                                                    <input id="name3" type="text" class="form-control" placeholder="Jhon Doe">
                                                </div>
                                                <div class="col-lg-6 mb-7">
                                                    <label for="email3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">E-mail</label>
                                                    <input id="email3" type="email" class="form-control" placeholder="example@gmail.com">
                                                </div>
                                                <div class="col-lg-6 mb-7">
                                                    <label for="subject3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Subject</label>
                                                    <input id="subject3" type="text" class="form-control" placeholder="Special contract">
                                                </div>
                                                <div class="col-lg-12 mb-7">
                                                    <label for="message3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Message</label>
                                                    <textarea name="message" id="message3" placeholder="Type your message" class="form-control h-px-144"></textarea>
                                                </div>
                                                <div class="col-lg-12 pt-4">
                                                    <button class="btn btn-primary text-uppercase w-100 h-px-48">Send Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-xxl-3 col-md-4 offset-xxl-0 offset-lg-4 offset-md-5 order-3 order-xl-2 mt-xxl-0 mt-md-12">
                        <div class="pl-lg-5">

                            <div class="bg-white shadow-9 rounded-4">

                                <h4 class="font-size-6 font-weight-semibold ml-4 mt-4"><span><ion-icon name="notifications-outline" size="medium"></ion-icon></span> Notifications</h4>
                            <ul class="list-unstyled">

                                <li class="border-bottom">
                                    <a class="media align-items-center py-9 flex-wrap" href="#">
                                        <div class="mr-7">
                                            <span class="circle-40 bg-green text-center ml-7">
                                                <i class="text-white fa fa-bell"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <h4 class="mb-0 font-size-5 font-weight-semibold">Job Alert!</h4>
                                            <p class="mb-0 font-size-3 heading-default-color">A new job was posted.</p>
                                            <span class="font-size-3 text-smoke"><img class="mr-2" src="{{ asset('assets/image/svg/icon-clock.svg') }}" alt="">3 hours ago</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="border-bottom">
                                    <a class="media align-items-center py-9 flex-wrap" href="#">
                                        <div class="mr-7">
                                            <span class="circle-40 bg-green text-center ml-7">
                                                <i class="text-white fa fa-bell"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <h4 class="mb-0 font-size-5 font-weight-semibold">Job Alert!</h4>
                                            <p class="mb-0 font-size-3 heading-default-color">A new job was posted.</p>
                                            <span class="font-size-3 text-smoke"><img class="mr-2" src="{{ asset('assets/image/svg/icon-clock.svg') }}" alt="">3 hours ago</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="border-bottom">
                                    <a class="media align-items-center py-9 flex-wrap" href="#">
                                        <div class="mr-7">
                                            <span class="circle-40 bg-green text-center ml-7">
                                                <i class="text-white fa fa-bell"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <h4 class="mb-0 font-size-5 font-weight-semibold">Job Alert!</h4>
                                            <p class="mb-0 font-size-3 heading-default-color">A new job was posted.</p>
                                            <span class="font-size-3 text-smoke"><img class="mr-2" src="{{ asset('assets/image/svg/icon-clock.svg') }}" alt="">3 hours ago</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="border-bottom">
                                    <a class="media align-items-center py-9 flex-wrap" href="#">
                                        <div class="mr-7">
                                            <span class="circle-40 bg-green text-center ml-7">
                                                <i class="text-white fa fa-bell"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <h4 class="mb-0 font-size-5 font-weight-semibold">Job Alert!</h4>
                                            <p class="mb-0 font-size-3 heading-default-color">A new job was posted.</p>
                                            <span class="font-size-3 text-smoke"><img class="mr-2" src="{{ asset('assets/image/svg/icon-clock.svg') }}" alt="">3 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

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
