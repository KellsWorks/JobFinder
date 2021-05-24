<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Traits\ApiResponser;
use App\Models\SavedJobs;
use App\Models\JobLikes;
use App\Models\FollowedJobs;
use App\Models\UserNotifications;


class JobsController extends Controller
{
    use ApiResponser;

    public function getJobs(Request $request){

        $jobs = Jobs::all();

        return $jobs;
    }

    public function likeJob(Request $request){

        if(JobLikes::where('jobs_id', $request->id)->where('user_id', $request->user_id)->count() < 1){
            $likedJob = new JobLikes();
            $likedJob->user_id = $request->user_id;

            $job = Jobs::find($request->id);
            $job->jobLikes()->save($likedJob);

            $notification = new UserNotifications();
            $notification->user_id = $request->user_id;
            $notification->title = $job->title;
            $notification->category = 'Job likes';
            $notification->content = 'You have liked the '.$job->title.' job';
            $notification->save();
    
            return response()->json([
               'success' => true,
               'message' => 'You have successfully liked a job'
            ]);

        } else {
            return response()->json([
                'success'=>false,
               'message' => 'You have already liked the job'
            ]);
        }

       

    }

    public function saveJob(Request $request){

        $id = auth()->user()->id;

        if(SavedJobs::where('user_id', $id)->where('jobs_id', $request->id)->count() < 1){
            $savedJob = new SavedJobs();
            $savedJob->user_id = $id;
    
            $job = Jobs::find($request->id);
            $job->savedJobs()->save($savedJob);
    
            $notification = new UserNotifications();
            $notification->user_id = $id;
            $notification->title = $job->title;
            $notification->category = 'Job likes';
            $notification->content = 'You have liked the '.$job->title.' job';
            $notification->save();
    
            return response()->json([
                'success' => true,
                'message' => 'You have successfully saved The job'
            ]);
        } else {
            return response()->json([
                  'success' => false,
                  'message' => 'You have already saved the Job'
            ]);
        }
       
        

    }

    public function followJob(Request $request){

        $savedJob = new FollowedJobs();
        $savedJob->user_id = $request->user_id;

        $job = Jobs::find($request->id);
        $job->followedJobs()->save($savedJob);

        $notification = new UserNotifications();
        $notification->user_id = $request->user_id;
        $notification->title = $job->title;
        $notification->category = 'Job likes';
        $notification->content = 'You have liked the '.$job->title.' job';
        $notification->save();

        return(
            $this->success("","Job followed successfully!")
        );

    }

    public function getSavedJob(Request $request){
        $id = auth()->user()->id;
        $savedJobs = SavedJobs::where('user_id', $id)->get();
    
        return $savedJobs;

    }

    public function getSavedJobs(Request $request){

        $id = auth()->user()->id;
        $savedJobs = SavedJobs::where('user_id', $id)->pluck("jobs_id");

        $saved = Jobs::find($savedJobs);

        return $saved;
    }

    public function getFollowedJobs(Request $request){
        $id= auth()->user()->id;

        $followedJobs = FollowedJobs::where('user_id', $id)->get();

        return $followedJobs;
    }

    public function getJobsByCategory(Request $request){

        $jobsCategory = JobsCategory::where('category', $request->category)
                      ->pluck('id');

        $jobs = Jobs::find($jobsCategory);

        return response()->json($jobs, 200);

    }
}
