@extends('layouts.admin-app')

@section('menu')

<li class="active"><a href="{{ route('admin.home') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas  fa-tachometer mr-7"></i>Dashboard</a></li>
<li class=""><a href="{{ route('admin.posted-jobs') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-briefcase mr-7"></i>Posted Jobs</a></li>
<li class=""><a href="{{ route('admin.site-users') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-user mr-7"></i>Users <span class="ml-auto px-1 h-1 bg-dodger text-white font-size-3 rounded-5 max-height-px-18 flex-all-center">14</span></a></li>
<li class=""><a href="{{ route('admin.settings') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-cog mr-7"></i>Settings</a></li>

@endsection

@section('content')
<div class="container">

    @if (session('status'))
    <div class="alert alert-info" id="session-alert">
        {{ session('status') }}
        </div>
    @endif

    <div class="row mb-7">
        <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">

            <a href="#" class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
                <div class="text-blue bg-blue-opacity-1 circle-56 font-size-6 mr-7">
                    <i class="fas fa-briefcase"></i>
                </div>

                <div class="">
                    <h5 class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1"><span class="counter">
                        {{ $jobs->count() }}
                    </span></h5>
                    <p class="font-size-4 font-weight-normal text-gray mb-0">Posted Jobs</p>
                </div>
            </a>

        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">

            <a href="#" class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
                <div class="text-pink bg-pink-opacity-1 circle-56 font-size-6 mr-7">
                    <i class="fas fa-user"></i>
                </div>

                <div class="">
                    <h5 class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1"><span class="counter">
                        {{ $users }}
                    </span></h5>
                    <p class="font-size-4 font-weight-normal text-gray mb-0">Users</p>
                </div>
            </a>

        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">

            <a href="#" class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
                <div class="text-orange bg-orange-opacity-1 circle-56 font-size-6 mr-7">
                    <i class="fas fa-heart"></i>
                </div>

                <div class="">
                    <h5 class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1"><span class="counter">
                        {{ $jobLikes }}
                    </span></h5>
                    <p class="font-size-4 font-weight-normal text-gray mb-0">
                    Job likes
                    </p>
                </div>
            </a>

        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">

            <a href="#" class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
                <div class="text-egg-blue bg-egg-blue-opacity-1 circle-56 font-size-6 mr-7">
                    <i class="fas fa-mouse-pointer"></i>
                </div>

                <div class="">
                    <h5 class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1"><span class="counter">
                        {{ $savedJobs }}
                    </span></h5>
                    <p class="font-size-4 font-weight-normal text-gray mb-0">Saved jobs</p>
                </div>
            </a>

        </div>
    </div>

    <div class="mb-18">
        <div class="row mb-11 align-items-center">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <h3 class="font-size-6 mb-0">Posted Jobs ({{ $jobs->count() }})</h3>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
                    <p class="font-size-4 mb-0 mr-6 py-2">Filter by Job:</p>
                    <div class="h-px-48">
                        <select name="country" id="country" class="nice-select pl-7 h-100 arrow-3 arrow-3-black min-width-px-273 font-weight-semibold text-black-2">
                            <option value="" data-display="Product Designer">Full-Time</option>
                            <option value="">Part Time</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-8 pt-7 rounded pb-9 px-11">
            <div class="table-responsive ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="pl-0 border-0 font-size-4 font-weight-normal">Title</th>
                            <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal">Employer</th>
                            <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal">Location</th>
                            <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal">Job Type</th>
                            <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal">Date posted</th>
                            <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal"></th>
                            <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs->take(5) as $job)
                        <tr class="border border-color-2">
                            <th scope="row" class="pl-6 border-0 py-7 min-width-px-235">
                                <div class="">
                                    <a href="jobdetails.html" class="font-size-4 mb-0 font-weight-semibold text-black-2">{{ $job->title }}</a>
                                </div>
                            </th>
                            <td class="table-y-middle py-7 min-width-px-135">
                                <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">{{ $job->employer }}</h3>
                            </td>
                            <td class="table-y-middle py-7 min-width-px-125">
                                <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">{{ $job->location }}</h3>
                            </td>
                            <td class="table-y-middle py-7 min-width-px-155">
                                <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">{{ $job->duration }}</h3>
                            </td>
                            <td class="table-y-middle py-7 min-width-px-205">
                                <h3 class="font-size-4 font-weight-bold text-black-2 mb-0">{{ \Carbon\Carbon::parse($job->created_at)->diffForHumans()}}</h3>
                            </td>
                            <td class="table-y-middle py-7 min-width-px-80">
                                <a href="#" class="font-size-3 font-weight-bold text-green text-uppercase">Edit</a>
                            </td>
                            <td class="table-y-middle py-7 min-width-px-100">
                                <a href="#" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
