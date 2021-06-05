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
                <label for="title" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job Title</label>
                <input id="title" name="title" required type="text" class="form-control" placeholder="Title of the job">
            </div>
            <div class="col-lg-6 mb-7">
                <label for="employer" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Employer</label>
                <input id="employer" type="text" class="form-control" placeholder="Name of the employer">
            </div>
            <div class="col-lg-6 mb-7">
                <label for="logo" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Employer Logo</label>
                <input id="logo" type="file" class="form-control" placeholder="Employer logo">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="email" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Employer email</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="Employer email address">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="desription" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Description</label>
                <textarea name="desription" id="desription" placeholder="Job description" class="form-control h-px-144"></textarea>
            </div>
            <div class="col-lg-12 mb-7">
                <label for="content" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Content</label>
                <textarea name="content" id="content" placeholder="Job content" class="form-control h-px-144"></textarea>
            </div>
            <div class="col-lg-12 mb-7">
                <label for="date_" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Due date of application</label>
                <input id="date_" name="date_" type="date" class="form-control" placeholder="Due date">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="location" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Location</label>
                <input id="location" name="location" type="text" class="form-control" placeholder="City or district">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="category" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job category</label>
                <input id="category" name="category" type="text" class="form-control" placeholder="Due date">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="qualifications" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job qualifications</label>
                <input id="qualifications" name="qualifications" type="text" class="form-control" placeholder="Due date">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="skills" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job skills</label>
                <input id="skills" name="skills" type="text" class="form-control" placeholder="Due date">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="tags" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job tags</label>
                <input id="tags" name="tags" type="text" class="form-control" placeholder="Due date">
            </div>

            <div class="col-lg-12 pt-4">
                <button class="btn btn-primary text-uppercase w-100 h-px-48">POST</button>
            </div>
        </div>
    </form>
</div>
@endsection
