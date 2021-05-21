<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use Auth;
use App\Models\JobLikes;
use App\Models\JobSkills;
use App\Models\JobTags;
use App\Models\JobsQualifications;
use App\Models\Districts;
use App\Models\SavedJobs;
use Http;

class PagesController extends Controller
{
    public function jobs(){

        $search = request()->query('query');

        if($search){

            $jobs = Jobs::where('title', 'LIKE', "%{$search}%")->simplePaginate(3);

        }else{

            $jobs = Jobs::with('tags')->get();

        }


        $districts = Districts::all();


        return view('jobs', ['jobs' => $jobs, 'districts' => $districts]);
    }

    public function error(){
        return view('errrors.404');
    }

    public function job($id){

        $jobs  = Jobs::findOrFail($id);
        $skills = JobSkills::where('job_id', $id)->get();
        $likes = JobLikes::where('jobs_id', $id)->count();
        $tags = JobTags::where('jobs_id', $id)->get();
        $qualifications = JobsQualifications::where('job_id', $id)->get();


        return view('job', ['jobs'  => $jobs, 'likes' => $likes, 'tags' => $tags, 'skills' => $skills, 'qualifications' => $qualifications ]);
    }

    public function likeJob($id){

        $user_id = Auth::user()->id;

        if(JobLikes::where('jobs_id', $id)->where('user_id', $user_id)->count() < 1){

            $likedJob = new JobLikes();
            $likedJob->user_id = Auth::user()->id;

            $job = Jobs::find($id);
            $job->jobLikes()->save($likedJob);

            return redirect()->back()->with('status', 'You liked this job');
        }else{

            $jobLikeID = JobLikes::where('jobs_id', $id)->where('user_id', $user_id)->pluck('id')[0];

            $jobLike = JobLikes::find($jobLikeID);
            $jobLike->delete();

            $jobs  = Jobs::findOrFail($id);
            $skills = JobSkills::where('job_id', $id)->get();
            $likes = JobLikes::where('jobs_id', $id)->count();
            $tags = JobTags::where('jobs_id', $id)->get();
            $qualifications = JobsQualifications::where('job_id', $id)->get();

            return redirect()->back()->with('status', 'You disliked this job');
        }



    }

    public function saveJob($id){


        $savedJob = new SavedJobs();
        $savedJob->user_id = Auth::user()->id;

        $job = Jobs::find($id);
        $job->savedJobs()->save($savedJob);

        return redirect()->back()->with('status', 'You have saved this job');

    }

    public function search_results(){
        return view('search-results');
    }

    public function search(){

        $search = request()->query('query');

        if($search){

            $jobs = Jobs::where('title', 'LIKE', "%{$search}%")->simplePaginate(3);

        }else{

        }


    }
}
