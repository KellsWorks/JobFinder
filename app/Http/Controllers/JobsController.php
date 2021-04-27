<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Traits\ApiResponser;

class JobsController extends Controller
{
    use ApiResponser;

    public function getJobs(Request $request){

        $jobs = Jobs::all();

        return $this->success([
            "jobs" => $jobs
        ]);
    }
}
