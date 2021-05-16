<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class PagesController extends Controller
{
    public function jobs(){
        return view('jobs');
    }

    public function error(){
        return view('errrors.404');
    }

    public function job(Jobs $jobs){

        // dd($jobs->title);

        return view('job', compact('jobs'));
    }

    public function search_results(){
        return view('search-results');
    }
}
