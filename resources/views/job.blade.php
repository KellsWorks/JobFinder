{{-- Copyright (c) Nextgenerations Malawi --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta author="KellsWorks,RodgerCodes@NextgenerationsMalawi" name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">

    @include('scripts.css')

</head>

<body>
    <div class="site-wrapper overflow-hidden ">

        @include('partials.header')

        @include('includes.auth')

        <div class="jobDetails-section bg-default-1 pt-28 pt-lg-27 pb-xl-25 pb-12">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-11 mt-4 ml-xxl-32 ml-xl-15 dark-mode-texts">
                        <div class="mb-9">
                            <a class="d-flex align-items-center ml-4" href="javascript:history.back()">
                                <ion-icon name="arrow-back-outline"></ion-icon><span class="text-uppercase font-size-3 font-weight-bold text-gray">Back</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-11 mb-8 px-xxl-15 px-xl-0">
                        <div class="bg-white rounded-4 border border-mercury shadow-9">

                            <div class="pt-9 pl-sm-9 pl-5 pr-sm-9 pr-5 pb-8 border-bottom border-width-1 border-default-color light-mode-texts">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="media align-items-center">

                                            <div class="square-72 d-block mr-8 pt-4 ml-3 justify-content-center">
                                                <img class="img-fluid mt-4 center" src="{{ asset('img/companies/'.$jobs->employer_logo)}}" alt="">
                                            </div>

                                            <div>
                                                <h3 class="font-size-6 mb-0">{{ $jobs->title }}</h3>
                                                <span class="font-size-3 text-gray line-height-2">{{ $jobs->employer }}</span>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6 text-right pt-7 pt-md-0 mt-md-n1">

                                        <div class="media justify-content-md-end align-items-center">
                                            <p class="d-flex font-size-2 p-5 font-weight-bold"><i class="fa fa-clock mr-1"></i></span>Posted: {{ \Carbon\Carbon::parse($jobs->created_at)->diffForHumans() }}</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row pt-9">
                                    <div class="col-12">

                                        <div class="card-btn-group">
                                            <a class="btn btn-green text-uppercase btn-medium rounded-3 w-180 mr-4 mb-5" href="mailto:{{ $jobs->employer_email }}">Apply to this job</a>
                                            <a class="btn btn-outline-mercury text-black-2 text-uppercase h-px-48 rounded-3 mr-4 mb-5 px-5" @auth
                                                href="{{ url('/job/save/'.$jobs->id) }}"
                                            @else
                                                href="javascript:"
                                            @endauth>
                                                Save job
                                            </a>
                                            <a id="like" onclick="liked()" class="text-red  btn btn-outline-mercury text-uppercase h-px-48 rounded-3 mb-5 px-5" @auth
                                            href="{{ url('/job/like/'.$jobs->id) }}"
                                            @else
                                            href="javascript:"
                                            @endauth>
                                            <span class="mt-2"><ion-icon name="heart"></ion-icon></i> </span>  {{ $likes }}</a>
                                        </div>

                                        <div>
                                            <p style="width: 100%" class="btn btn-outline-red  text-uppercase h-px-48 rounded-3 mr-4 mb-5 px-5">
                                                Due date for this job: {{ $jobs->closing_date }}
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                @if (session('status'))
                                <div class="alert alert-info" id="session-alert">
                                    {{ session('status') }}
                                </div>
                                @endif

                            </div>

                            <div class="job-details-content pt-8 pl-sm-9 pl-6 pr-sm-9 pr-6 pb-10 border-bottom border-width-1 border-default-color light-mode-texts">
                                <div class="row mb-7">
                                    <div class="col-md-4 mb-md-0 mb-6">
                                        <div class="media justify-content-md-start">
                                            <div class="image mr-5">
                                                <img src="{{ asset('assets/image/svg/icon-dolor.svg') }}" alt="money-icon">
                                            </div>
                                            <p class="font-weight-semibold font-size-5 text-black-2 mb-0">{{ $jobs->salary }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-lg-0 pl-lg-10 mb-md-0 mb-6">
                                        <div class="media justify-content-md-start">
                                            <div class="image mr-5">
                                                <img src="{{ asset('assets/image/svg/icon-briefcase.svg') }}" alt="duration-icon">
                                            </div>
                                            <p class="font-weight-semibold font-size-5 text-black-2 mb-0">{{ $jobs->duration }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-lg-0">
                                        <div class="media justify-content-md-start">
                                            <div class="image mr-5">
                                                <img src="{{ asset('assets/image/svg/icon-location.svg') }}" alt="location-icon">
                                            </div>
                                            <p class="font-weight-semibold font-size-5 text-black-2 mb-0">{{ $jobs->location }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-lg-0 mb-10">
                                        <div class="tags">
                                            <p class="font-size-4 text-gray mb-0">Essential skills</p>
                                            <ul class="list-unstyled mr-n3 mb-0">

                                                @forelse ($skills as $skill)
                                                <li class="d-block font-size-4 text-black-2 mt-2">
                                                    <span class="d-inline-block mr-2">???</span>{{ $skill->name }}
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
                                            <p class="font-size-4 text-black-2">{!! $jobs->description !!}</p>
                                        </div>
                                        <div class="">

                                            <p class="font-size-4 text-black-2 com-text">
                                                {!! $jobs->content !!}
                                            </p>

                                            <a class="btn btn-green text-uppercase btn-medium w-180 h-px-48 rounded-3 mr-4 mt-6" href="mailto:{{ $jobs->employer_email }}">Apply to this job</a>

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
