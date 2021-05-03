<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jobs;
use App\Traits\ApiResponser;
use App\Models\UserNotifications;

class JobLikesController extends Controller
{
    use ApiResponser;

    public function like(Request $request){

        $user = User::findOrFail($request->user_id);
        $job = Jobs::findOrFail($request->job_id);

        $user->like($job);
        $likes = $job->likers()->count();

        $notification = new UserNotifications();
        $notification->user_id = $request->user_id;
        $notification->title = $job->title;
        $notification->category = 'Job likes';
        $notification->content = 'You have liked the '.$job->title.' job';
        $notification->save();

        return $this->success([
            'likes'=> $likes
        ], 'job liked successfully');
    }

    public function dislike(Request $request){

        $user = User::findOrFail($request->user_id);
        $job = Jobs::findOrFail($request->job_id);

        $user->unlike($job);
        $likes = $job->likers()->count();

        $notification = new UserNotifications();
        $notification->user_id = $request->user_id;
        $notification->title = $job->title;
        $notification->category = 'Job likes';
        $notification->content = 'You have disliked the '.$job->title.' job';
        $notification->save();

        return $this->success([
            'likes'=> $likes
        ], 'job disliked successfully');

    }
}
