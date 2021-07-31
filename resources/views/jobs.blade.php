{{-- Nextgenerations Malawi - Copyright - Job Finder --}}
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <meta author="KellsWorks,RodgerCodes@Nextgenerations Malawi" name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Job Finder') }}</title>

    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">

    @include('scripts.css')

</head>

<body>

    <div class="site-wrapper overflow-hidden ">

        @include('partials.header')

        @include('includes.auth')


        <div class="bg-default-1 pt-26 pt-lg-28 pb-13 pb-lg-25">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-5 col-xs-8">

                        <div class="widgets mb-11">
                            <h4 class="font-size-6 font-weight-semibold mb-6">Job Type</h4>
                            <ul class="list-unstyled filter-check-list">
                                <li class="mb-2"><a href="#job-type-full-time" class="toggle-item clicked">Full Time</a></li>
                                <li class="mb-2"><a href="#job-type-part-time" class="toggle-item clicked">Part Time</a></li>
                                <li class="mb-2"><a href="#job-type-contract" class="toggle-item clicked">Contract</a></li>
                                <li class="mb-2"><a href="#job-type-internship" class="toggle-item clicked">Internship</a></li>
                                <li class="mb-2"><a href="#job-type-temporary" class="toggle-item clicked">Temporary</a></li>
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
                                <li class="mb-2"><a href="#job-skills-all" class="toggle-item clicked">All</a></li>
                                <li class="mb-2"><a href="#job-skills-senior" class="toggle-item">Senior</a></li>
                                <li class="mb-2"><a href="#job-skills-mid" class="toggle-item">Mid</a></li>
                                <li class="mb-2"><a href="#job-skills-junior" class="toggle-item">Junior</a></li>
                            </ul>
                        </div>

                        <div class="widgets mb-11">
                            <h4 class="font-size-6 font-weight-semibold mb-6">Posted Time</h4>
                            <ul class="list-unstyled filter-check-list">
                                <li class="mb-2"><a href="#posted-time-anytime" class="toggle-item clicked">Anytime</a></li>
                                <li class="mb-2"><a href="#posted-time-today" class="toggle-item">Today</a></li>
                                <li class="mb-2"><a href="#posted-time-yesterday" class="toggle-item">Yesterday</a></li>
                                <li class="mb-2"><a href="#posted-time-last-week" class="toggle-item">Last week</a></li>
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
                                        <select name="location" id="location" class="nice-select font-size-4 pl-13 h-100 arrow-3">
                                        <option  data-display="City, district">City or district</option>
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->name }}">{{ $district->name }}</option>
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
                                    <a class="heading-default-color pl-5 font-size-6 hover-text-hitgray active disabled" href="#">
                                        <ion-icon name="list-outline"></ion-icon>
                                    </a>
                                    <a class="heading-default-color pl-5 font-size-6 hover-text-hitgray" href="#">
                                        <ion-icon name="grid-outline"></ion-icon>
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
                                                    <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="{{ url('/job/'.$job->slug) }}">{!! $job->title !!}</a></h3>
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
                                {{ $jobs->links() }}
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
