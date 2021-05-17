<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use Auth;
use App\Models\JobLikes;
use App\Models\JobTags;
use Http;

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
        $likes = JobLikes::where('jobs_id', $id)->count();
        $tags = JobTags::where('job_id', $id)->get();

        return view('job', ['jobs'  => $jobs, 'likes' => $likes, 'tags' => $tags ]);
    }

    public function likeJob($job_id){

        $job = new JobLikes();
        $job->user_id = Auth::user()->id;
        $job->job_id = $job_id;
        $job->save();

    }

    public function search_results(){
        return view('search-results');
    }
}
