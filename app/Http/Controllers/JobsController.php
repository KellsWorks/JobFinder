<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Traits\ApiResponser;
use App\Models\SavedJobs;
use App\Models\JobLikes;
use App\Models\FollowedJobs;

class JobsController extends Controller
{
    use ApiResponser;

    public function getJobs(Request $request){

        $jobs = Jobs::all();

        return $this->success([
            "jobs" => $jobs
        ]);

    }

    public function likeJob(Request $request){

        $likedJob = new JobLikes();
        $likedJob->user_id = $request->user_id;

        $job = Jobs::find($request->id);
        $job->jobLikes()->save($likedJob);

        return(
            $this->success("","Job liked successfully!")
        );

    }

    public function saveJob(Request $request){

        $savedJob = new SavedJobs();
        $savedJob->user_id = $request->user_id;

        $job = Jobs::find($request->id);
        $job->savedJobs()->save($savedJob);

        return(
            $this->success("","Job saved successfully!")
        );

    }

    public function followJob(Request $request){

        $savedJob = new FollowedJobs();
        $savedJob->user_id = $request->user_id;

        $job = Jobs::find($request->id);
        $job->followedJobs()->save($savedJob);

        return(
            $this->success("","Job followed successfully!")
        );

    }

    public function getSavedJobs(Request $request){

        $savedJobs = SavedJobs::where('user_id', $request->user_id)->get();

        return(
            $this->success(
                [
                    "savedJobs" => $savedJobs
                ],
                "Your saved jobs"
            )
            );
    }

    public function getJobsByCategory(Request $request){

        $jobsCategory = JobsCategory::where('category', $request->category)
                      ->pluck('id');

        $jobs = Jobs::find($jobsCategory);

        return response()->json($jobs, 200);

    }
}
