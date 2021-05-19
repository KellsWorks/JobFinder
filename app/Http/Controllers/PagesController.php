<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use Auth;
use App\Models\JobLikes;
use App\Models\JobSkills;
use App\Models\JobTags;
use App\Models\JobsQualifications;
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
        $skills = JobSkills::where('job_id', $id)->get();
        $likes = JobLikes::where('jobs_id', $id)->count();
        $tags = JobTags::where('job_id', $id)->get();
        $qualifications = JobsQualifications::where('job_id', $id)->get();


        return view('job', ['jobs'  => $jobs, 'likes' => $likes, 'tags' => $tags, 'skills' => $skills, 'qualifications' => $qualifications ]);
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
