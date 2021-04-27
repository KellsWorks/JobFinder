<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Traits\ApiResponser;
use App\Models\SavedJobs;

class JobsController extends Controller
{
    use ApiResponser;

    public function getJobs(Request $request){

        $jobs = Jobs::all();

        return $this->success([
            "jobs" => $jobs
        ]);
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
}
