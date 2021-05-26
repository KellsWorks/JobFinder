<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function postedJobs(){
        return view('admin.posted-jobs');
    }
    public function siteUsers(){
        return view('admin.users');
    }
    public function settings(){
        return view('admin.settings');
    }
}
