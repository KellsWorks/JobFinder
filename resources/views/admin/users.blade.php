@extends('layouts.admin-app')

@section('menu')

<li class=""><a href="{{ route('admin.home') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas  fa-tachometer mr-7"></i>Dashboard</a></li>
<li class=""><a href="{{ route('admin.posted-jobs') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-briefcase mr-7"></i>Posted Jobs</a></li>
<li class="active"><a href="{{ route('admin.site-users') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-user mr-7"></i>Users <span class="ml-auto px-1 h-1 bg-dodger text-white font-size-3 rounded-5 max-height-px-18 flex-all-center">14</span></a></li>
<li class=""><a href="{{ route('admin.settings') }}" class="px-10 py-1 my-5 font-size-4 flex-y-center"><i class="fas fa-cog mr-7"></i>Settings</a></li>

@endsection

@section('content')
<div class="container">
</div>
@endsection
