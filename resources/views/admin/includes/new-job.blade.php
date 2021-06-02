@extends('layouts.admin-app')

@section('menu')

<li class="active"><a href="{{ route('admin.home') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas  fa-tachometer mr-7"></i>Dashboard</a></li>
<li class=""><a href="{{ route('admin.posted-jobs') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-briefcase mr-7"></i>Posted Jobs</a></li>
<li class=""><a href="{{ route('admin.site-users') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-user mr-7"></i>Users <span class="ml-auto px-1 h-1 bg-dodger text-white font-size-3 rounded-5 max-height-px-18 flex-all-center">14</span></a></li>
<li class=""><a href="{{ route('admin.settings') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-cog mr-7"></i>Settings</a></li>

@endsection

@section('content')
<div class="container">
    <form action="/">
        <div class="row">
            <div class="col-12 mb-7">
                <label for="name3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job Title</label>
                <input id="name3" type="text" class="form-control" placeholder="Jhon Doe">
            </div>
            <div class="col-lg-6 mb-7">
                <label for="email3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Employer</label>
                <input id="email3" type="email" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="col-lg-6 mb-7">
                <label for="subject3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Employer Logo</label>
                <input id="subject3" type="text" class="form-control" placeholder="Special contract">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="message3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Description</label>
                <textarea name="message" id="message3" placeholder="Type your message" class="form-control h-px-144"></textarea>
            </div>
            <div class="col-lg-12 mb-7">
                <label for="message3" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Content</label>
                <textarea name="message" id="message3" placeholder="Type your message" class="form-control h-px-144"></textarea>
            </div>
            <div class="col-lg-12 pt-4">
                <button class="btn btn-primary text-uppercase w-100 h-px-48">Send Now</button>
            </div>
        </div>
    </form>
</div>
@endsection
