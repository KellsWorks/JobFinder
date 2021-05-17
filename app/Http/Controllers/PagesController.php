<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use Auth;
use App\Models\JobLikes;

class PagesController extends Controller
{
    public function jobs(){
        return view('jobs');
    }

    public function error(){
        return view('errrors.404');
    }

    public function job($id){

        $jobs  = Jobs::findOrFail($id);
        $likes = JobLikes::where('id', $id)->count();

        return view('job', ['jobs'  => $jobs, 'likes' => $likes ]);
    }

    public function search_results(){
        return view('search-results');
    }
}
