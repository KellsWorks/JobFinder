@extends('layouts.admin-app')

@section('menu')

<li class="active"><a href="{{ route('admin.home') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="icon icon-layout-11 mr-7"></i>Dashboard</a></li>
<li><a href="{{ route('admin.posted-jobs') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-briefcase mr-7"></i>Posted Jobs</a></li>
<li><a href="{{ route('admin.site-users') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-user mr-7"></i>Users <span class="ml-auto px-1 h-1 bg-dodger text-white font-size-3 rounded-5 max-height-px-18 flex-all-center">14</span></a></li>
<li><a href="{{ route('admin.settings') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-cog mr-7"></i>Settings</a></li>

@endsection

@section('content')
<div class="container">
    <form enctype="multipart/form-data" action="{{ route('admin.add-job') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 mb-7">
                <label for="title" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job Title</label>
                <input id="title" name="title" required type="text" class="form-control" placeholder="Title of the job">
            </div>
            <div class="col-lg-6 mb-7">
                <label for="employer" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Employer</label>
                <input id="employer" required name="employer" type="text" class="form-control" placeholder="Name of the employer">
            </div>
            <div class="col-lg-6 mb-7">
                <label for="logo" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Employer Logo</label>
                <input id="logo" name="logo" type="file" class="form-control">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="email" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Employer email</label>
                <input id="email" name="email" required type="email" class="form-control" placeholder="Employer email address">
            </div>

            <div class="col-lg-12 mb-7">
                <label for="location" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Location</label>
                <div class="form-group w-100 mb-7">
                    <select required name="location" id="location" class="nice-select w-100 font-size-4">
                        @foreach ($districts as $district)
                            <option value="{{ $district->name }}">{{ $district->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-12 mb-7">
                <label for="description" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Description</label>
                <textarea name="description" required id="description" placeholder="Job description" class="form-control h-px-144"></textarea>
            </div>
            <div class="col-lg-12 mb-7">
                <label for="content" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Content</label>
                <textarea name="content" required id="content" placeholder="Job content" class="form-control h-px-144"></textarea>
            </div>
            <div class="col-lg-12 mb-7">
                <label for="date_" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Due date of application</label>
                <input id="date_" required name="date_" type="date" class="form-control" placeholder="Due date">
            </div>

            <div class="col-lg-12 mb-7">
                <label for="category_" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job category</label>
                <div class="form-group w-100 mb-7">
                    <select required name="category_" id="category_" class="nice-select w-100 font-size-4">
                        @foreach ($categories as $category)
                            <option value="{{ $category->category }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-12 mb-7">
                <label for="qualifications" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job qualifications</label>
                <input data-role="tagsinput" id="qualifications" name="qualifications" type="text" class="form-control" placeholder="Enter job qualifications">
            </div>

            <div class="col-lg-12 mb-7">
                <label for="skills" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job skills</label>
                <input data-role="tagsinput" id="skills" name="skills" type="text" class="form-control" placeholder="Enter job skills">
            </div>
            <div class="col-lg-12 mb-7">
                <label for="tags" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job tags</label>
                <input data-role="tagsinput" id="tags" name="tags" type="text" class="form-control" placeholder="Enter job tags">
            </div>

            <div class="col-lg-12 mb-7">
                <label for="salary" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job salary</label>
                <input id="salary" name="salary" value="Unspecified" type="number" class="form-control" placeholder="Salary in Malawi Kwacha">
            </div>

            <div class="col-lg-12 mb-7">
                <label for="duration" class="font-size-4 font-weight-semibold text-black-2 mb-5 line-height-reset">Job duration</label>
                <input id="duration" value="Full time" name="duration" type="text" class="form-control" placeholder="Duration of the job">
            </div>

            <div class="col-lg-12 pt-4">
                <button class="btn btn-primary text-uppercase w-100 h-px-48">POST</button>
            </div>
        </div>
    </form>
</div>
@endsection
