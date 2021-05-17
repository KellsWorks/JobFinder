@extends('layouts.app')

@section('content')
<div class="bg-default-1 pt-26 pt-lg-28 pb-13 pb-lg-25">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 col-md-5 col-xs-8">
                <!-- Sidebar Start -->
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
                        <!-- Range Slider -->
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
                    <h4 class="font-size-6 font-weight-semibold mb-6">Experience Level </h4>
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
                        <li class="mb-2"><a href="#" class="toggle-item">Last day</a></li>
                        <li class="mb-2"><a href="#" class="toggle-item">Last 3 days</a></li>
                        <li class="mb-2"><a href="#" class="toggle-item">Last week</a></li>
                    </ul>
                </div>
                <!-- Sidebar End -->
            </div>
            <!-- Main Body -->
            <div class="col-12 col-xl-8 col-lg-8">
                <!-- form -->
                <form action="/" class="search-form">
                    <div class="filter-search-form-2 search-1-adjustment bg-white rounded-sm shadow-7 pr-6 py-6 pl-6">
                        <div class="filter-inputs">
                            <div class="form-group position-relative w-lg-45 w-xl-40 w-xxl-45">
                                <input class="form-control focus-reset pl-13" type="text" id="keyword" placeholder="UI Designer">
                                <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6">
            <i class="icon icon-zoom-2 text-primary font-weight-bold"></i>
          </span>
                            </div>
                            <!-- .select-city starts -->
                            <div class="form-group position-relative w-lg-55 w-xl-60 w-xxl-55">
                                <select name="country" id="country" class="nice-select font-size-4 pl-13 h-100 arrow-3">
              <option data-display="City, state, zip code or (Remote)">City</option>
              <option value="">United States of America</option>
              <option value="">United Arab Emirates</option>
              <option value="">Bangladesh</option>
              <option value="">Pakistan</option>
            </select>
                                <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6">
            <i class="icon icon-pin-3 text-primary font-weight-bold"></i>
          </span>
                            </div>
                            <!-- ./select-city ends -->
                        </div>
                        <div class="button-block">
                            <button class="btn btn-primary line-height-reset h-100 btn-submit w-100 text-uppercase">Search</button>
                        </div>
                    </div>
                </form>
                <div class="pt-12">
                    <div class="d-flex align-items-center justify-content-between mb-6">
                        <h5 class="font-size-4 font-weight-normal text-gray">
                            <span class="heading-default-color">120</span> results for <span class="heading-default-color">UI Designer</span>
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
                    <div class="mb-8">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media align-items-center">
                                        <div class="square-72 d-block mr-8">
                                            <img src="./image/l2/png/featured-job-logo-1.png" alt="">
                                        </div>
                                        <div>
                                            <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="#">Product Designer</a></h3>
                                            <a href="#" class="font-size-3 text-default-color line-height-2">AirBnb</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right pt-7 pt-md-5">
                                    <div class="media justify-content-md-end">
                                        <div class="image mr-5 mt-2">
                                            <img src="./image/svg/icon-fire-rounded.svg" alt="">
                                        </div>
                                        <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span class="text-black-2">80-90K</span> PLN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-8">
                                <div class="col-md-7">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Agile</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Wireframing</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Prototyping</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>
                                            <span class="font-weight-semibold">Berlyn, UK</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-suitecase.svg" alt=""></span>
                                            <span class="font-weight-semibold">Full-time</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-clock.svg" alt=""></span>
                                            <span class="font-weight-semibold">9d ago</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="mb-8">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media align-items-center">
                                        <div class="square-72 d-block mr-8">
                                            <img src="./image/l2/png/featured-job-logo-2.png" alt="">
                                        </div>
                                        <div>
                                            <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="#">UI/UX Designer</a></h3>
                                            <a href="#" class="font-size-3 text-default-color line-height-2">Apple INC</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right pt-7 pt-md-5">
                                    <div class="media justify-content-md-end">
                                        <div class="image mr-5 mt-2">
                                            <img src="./image/svg/icon-fire-rounded.svg" alt="">
                                        </div>
                                        <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span class="text-black-2">120-150K</span> PLN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-8">
                                <div class="col-md-7">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Visual Design</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Wireframing</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Scrum</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>
                                            <span class="font-weight-semibold">Berlyn, UK</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-suitecase.svg" alt=""></span>
                                            <span class="font-weight-semibold">Full-time</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-clock.svg" alt=""></span>
                                            <span class="font-weight-semibold">9d ago</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="mb-8">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media align-items-center">
                                        <div class="square-72 d-block mr-8">
                                            <img src="./image/l2/png/featured-job-logo-3.png" alt="">
                                        </div>
                                        <div>
                                            <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="#">iOS Developer</a></h3>
                                            <a href="#" class="font-size-3 text-default-color line-height-2">Shopify</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right pt-7 pt-md-5">
                                    <div class="media justify-content-md-end">
                                        <div class="image mr-5 mt-2">
                                            <img src="./image/svg/icon-fire-rounded.svg" alt="">
                                        </div>
                                        <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span class="text-black-2">100-120K</span> PLN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-8">
                                <div class="col-md-7">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Swift</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Objective C</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">X Code</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>
                                            <span class="font-weight-semibold">Berlyn, UK</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-suitecase.svg" alt=""></span>
                                            <span class="font-weight-semibold">Full-time</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-clock.svg" alt=""></span>
                                            <span class="font-weight-semibold">9d ago</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="mb-8">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media align-items-center">
                                        <div class="square-72 d-block mr-8">
                                            <img src="./image/l2/png/featured-job-logo-4.png" alt="">
                                        </div>
                                        <div>
                                            <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="#">Creative Director</a></h3>
                                            <a href="#" class="font-size-3 text-default-color line-height-2">Facebook</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right pt-7 pt-md-5">
                                    <div class="media justify-content-md-end">
                                        <div class="image mr-5 mt-2">
                                            <img src="./image/svg/icon-fire-rounded.svg" alt="">
                                        </div>
                                        <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span class="text-black-2">80-90K</span> PLN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-8">
                                <div class="col-md-7">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Agile</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Wireframing</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Prototyping</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>
                                            <span class="font-weight-semibold">Berlyn, UK</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-suitecase.svg" alt=""></span>
                                            <span class="font-weight-semibold">Full-time</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-clock.svg" alt=""></span>
                                            <span class="font-weight-semibold">9d ago</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="mb-8">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media align-items-center">
                                        <div class="square-72 d-block mr-8">
                                            <img src="./image/l2/png/featured-job-logo-5.png" alt="">
                                        </div>
                                        <div>
                                            <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="#">Software Engineer</a></h3>
                                            <a href="#" class="font-size-3 text-default-color line-height-2">Oculus</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right pt-7 pt-md-5">
                                    <div class="media justify-content-md-end">
                                        <div class="image mr-5 mt-2">
                                            <img src="./image/svg/icon-fire-rounded.svg" alt="">
                                        </div>
                                        <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span class="text-black-2">80-90K</span> PLN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-8">
                                <div class="col-md-7">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">C++</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">JavaScprit</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">ReactJS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>
                                            <span class="font-weight-semibold">Berlyn, UK</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-suitecase.svg" alt=""></span>
                                            <span class="font-weight-semibold">Full-time</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-clock.svg" alt=""></span>
                                            <span class="font-weight-semibold">9d ago</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="mb-8">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media align-items-center">
                                        <div class="square-72 d-block mr-8">
                                            <img src="./image/l2/png/featured-job-logo-1.png" alt="">
                                        </div>
                                        <div>
                                            <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="#">Product Designer</a></h3>
                                            <a href="#" class="font-size-3 text-default-color line-height-2">AirBnb</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right pt-7 pt-md-5">
                                    <div class="media justify-content-md-end">
                                        <div class="image mr-5 mt-2">
                                            <img src="./image/svg/icon-fire-rounded.svg" alt="">
                                        </div>
                                        <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span class="text-black-2">80-90K</span> PLN</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-8">
                                <div class="col-md-7">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Agile</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Wireframing</a>
                                        </li>
                                        <li>
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Prototyping</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>
                                            <span class="font-weight-semibold">Berlyn, UK</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-suitecase.svg" alt=""></span>
                                            <span class="font-weight-semibold">Full-time</span>
                                        </li>
                                        <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                            <span class="mr-4" style="margin-top: -2px"><img src="./image/svg/icon-clock.svg" alt=""></span>
                                            <span class="font-weight-semibold">9d ago</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="text-center pt-5 pt-lg-13">
                        <a class="text-green font-weight-bold text-uppercase font-size-3" href="#">
                        Load More <i class="fas fa-sort-down ml-3"></i>
                        </a>
                    </div>
                </div>
                <!-- form end -->
            </div>
        </div>
    </div>
</div>
@endsection
