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

                @if (session('status'))
                    <div class="alert alert-info" id="session-alert">
                        {{ session('status') }}
                    </div>
                @endif

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

                                    @include('includes.change-profile-photo')

                                    @foreach ($profiles as $profile)
                                        <a class="mb-4" href="javacript:" data-toggle="modal" data-target="#profile_photo"><img class="circle-54" src="storage/profiles/{{ $profile->avatar }}" alt=""></a>
                                    @endforeach

                                    <h4 class="mb-0"><a class="text-black-2 font-size-6 mb-4 font-weight-semibold" href="#">{{ Auth::user()->name }}</a></h4>

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
                                        @foreach ($profiles as $profile)
                                        <h5 class="font-size-4 font-weight-semibold mb-0"><a class="text-black-2 text-break" href="tel:+999565562">{{ $profile->phone }}</a></h5>
                                        @endforeach
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
                                    <a class="active text-uppercase font-size-3 font-weight-bold text-default-color py-3" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Saved jobs</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    <div class="pr-xl-11 p-5 pl-xs-12 pt-9 pb-11 shadow">
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
                                                                <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="{{ url('/job/'.$job->id) }}">{!! $job->title !!}</a></h3>
                                                                <a href="#" class="font-size-3 text-default-color line-height-2">{{ $job->employer }}</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row pt-8">
                                                    <div class="col-md-7">
                                                        <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                                            <li>
                                                                <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-red-2 mt-2" href="#">{{ $job->closing_date }}</a>
                                                            </li>
                                                            <li>
                                                                <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-red-2 mt-2" href="#">Unsave</a>
                                                            </li>
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
                                                You have no saved jobs!
                                            </p>
                                            <p class="text-center">
                                                <span>
                                                    <img src="{{ asset('img/Delivery _ order, account, transportation, subway, box, shopping.png') }}" alt="" class="img-fluid center">
                                                </span>
                                            </p>

                                        </div>
                                        @endforelse
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-xxl-3 col-md-4 offset-xxl-0 offset-lg-4 offset-md-5 order-3 order-xl-2 mt-xxl-0 mt-md-12">
                        <div class="pl-lg-5">

                            <div class="bg-white shadow-9 rounded-4">

                                <h4 class="font-size-4 font-weight-semibold ml-4 mt-4">NOTIFICATIONS</h4>

                            <ul class="list-unstyled">

                                @forelse ($notifications as $notification)
                                <li class="border-bottom">

                                    <div class="w-100">
                                        <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                            <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                                                <span class="circle-40 bg-green text-center ml-7">
                                                    <i class="text-white fa fa-bell"></i>
                                                </span>
                                            </div>
                                            <div class="w-100 mt-n2">
                                                <h3 class="mb-0">
                                                    <a class="font-size-6 text-black-2" href="#">{{ $notification->title }}</a>
                                                </h3>
                                                <a href="#" class="font-size-4 text-default-color line-height-2">{{ $notification->content }}</a>
                                                <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                                    <a href="#" class="font-size-2 mt-2 text-gray mr-5">
                                                        <span><img class="mr-2" src="{{ asset('assets/image/svg/icon-clock.svg') }}" alt="">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</span>
                                                    </a>
                                                    <div class="d-flex mt-2">
                                                        <a href="{{ url('notification-read/'.$notification->id) }}"><i class="text-green fa fa-edit ml-1"></i></a>
                                                        <a href="{{ url('notification-delete/'.$notification->id) }}"><i class="text-red fa fa-trash ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @empty

                                <li>
                                    <div class="mt-3 ml-3 mr-3 mbt-3">
                                        <p class="text-red">
                                            You have 0 notifications
                                        </p>
                                        <img class="img-fluid" src="{{ asset('img/no_notifications.png') }}" alt="">
                                    </div>
                                </li>
                                @endforelse


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
