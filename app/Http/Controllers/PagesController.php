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
use App\Models\UserNotifications;
use App\Models\JobsCategory;
use App\Models\Support;
use App\Models\Profiles;
use Cookie;

use Http;

class PagesController extends Controller

{
    public function index(Request $request){

        $districts = Districts::orderBy('name','asc')->get();

        $categories = JobsCategory::with('icons')->with('jobs')->get();


        Cookie::queue('name', $request->test, 1);

        $jobs = Jobs::latest()->get();

        if(Auth::check() == "true"){

            $notifications = UserNotifications::where('user_id', Auth::user()->id)->get();

            $profile = Profiles::where('user_id', Auth::user()->id)->get();

            return view('index', ['jobs' => $jobs, 'categories' => $categories, 'districts' => $districts, 'notifications' => $notifications, 'profiles' => $profile]);

        }else{

            return view('index', ['jobs' => $jobs, 'categories' => $categories, 'districts' => $districts]);

        }

    }
    public function jobs(Request $request){

        $search = request()->query('query');

        $location = $request->get('location');

            if($search){

                $jobs = Jobs::where('title', 'LIKE', "%{$search}%")
                              ->where('location', 'LIKE', "%{$location}")
                              ->simplePaginate(3);

            }
            else
            {

            $jobs = Jobs::with('tags')
                        ->orderBy('id','desc')
                        ->simplePaginate(3);

            }


            $districts = Districts::orderBy('name','asc')->get();

        if(Auth::check() == "true"){

            $notifications = UserNotifications::where('user_id', Auth::user()->id)->get();

            $profiles = Profiles::where('user_id', Auth::user()->id)->get();

            return view('jobs', ['jobs' => $jobs, 'districts' => $districts, 'notifications' => $notifications, 'profiles' => $profiles]);

        }else{

            return view('jobs', ['jobs' => $jobs, 'districts' => $districts]);

        }

    }


    public function job($id){

        $jobs  = Jobs::findOrFail($id);

        $skills = JobSkills::where('job_id', $id)->get();

        $likes = JobLikes::where('jobs_id', $id)->count();

        $tags = JobTags::where('jobs_id', $id)->get();

        $qualifications = JobsQualifications::where('job_id', $id)->get();

        if(Auth::check() == "true"){

            $notifications = UserNotifications::where('user_id', Auth::user()->id)->get();

            $profiles = Profiles::where('user_id', Auth::user()->id)->get();

            return view('job', ['jobs'  => $jobs, 'likes' => $likes, 'tags' => $tags, 'skills' => $skills, 'qualifications' => $qualifications, 'notifications' => $notifications, 'profiles' =>$profiles ]);


        }else{

            return view('job', ['jobs'  => $jobs, 'likes' => $likes, 'tags' => $tags, 'skills' => $skills, 'qualifications' => $qualifications ]);

        }
    }

    public function likeJob($id){

        $user_id = Auth::user()->id;

        if(JobLikes::where('jobs_id', $id)->where('user_id', $user_id)->count() < 1){

            $likedJob = new JobLikes();

            $likedJob->user_id = Auth::user()->id;

            $job = Jobs::find($id);

            $job->jobLikes()->save($likedJob);

            $notification = new UserNotifications();

            $notification->user_id = Auth::user()->id;

            $notification->title = "Job Likes";

            $notification->category = "Jobs";

            $notification->content = "You have recently liked a job";

            $notification->save();

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

            $notification = new UserNotifications();

            $notification->user_id = Auth::user()->id;
            $notification->title = "Job Likes";

            $notification->category = "Jobs";

            $notification->content = "You have recently disliked a job";

            $notification->save();

            return redirect()->back()->with('status', 'You disliked this job');
        }



    }

    public function saveJob($id){

        $user_id = Auth::user()->id;

        if(SavedJobs::where('jobs_id', $id)->where('user_id', $user_id)->count() < 1){

            $savedJob = new SavedJobs();

            $savedJob->user_id = Auth::user()->id;

            $job = Jobs::find($id);

            $job->savedJobs()->save($savedJob);

            $notification = new UserNotifications();

            $notification->user_id = Auth::user()->id;

            $notification->title = "Job Saved";

            $notification->category = "Jobs";

            $notification->content = "You have recently saved a job";

            $notification->save();

            return redirect()->back()->with('status', 'You have saved this job');
        }
        else{
            return redirect()->back()->with('status', 'You have already saved this job job');
        }


    }

    public function policies(){

        return view('includes.terms-and-conditions');

    }

    public function exploreByCategory($id){

        $jobs = Jobs::where('jobs_category_id', $id)
                     ->with('tags')
                     ->orderBy('id','desc')->simplePaginate(3);

        $districts = Districts::all();


        if(Auth::check() == "true"){

            $notifications = UserNotifications::where('user_id', Auth::user()->id)->get();

            $profiles = Profiles::where('user_id', Auth::user()->id)->get();


            return view('jobs', ['jobs' => $jobs, 'districts' => $districts, 'notifications' => $notifications, 'profiles' => $profiles]);

        }else{

            return view('jobs', ['jobs' => $jobs, 'districts' => $districts]);

        }
    }

    public function support(){

        if(Auth::check() == "true"){

            $notifications = UserNotifications::where('user_id', Auth::user()->id)->get();

            $profiles = Profiles::where('user_id', Auth::user()->id)->get();

            return view('support', ['notifications' => $notifications, 'profiles' => $profiles]);

        }else{

            return view('support');

        }

    }

    public function supportMessage(Request $request){

        $message = new Support;

        $message->name = $request->name;

        $message->email_address = $request->email_address;

        $message->phone_number = $request->phone_number;

        $message->message = $request->message;

        $message->save();

        return redirect('support')->with('status', 'Your message has been sent successfully. Thank you!');
    }


}
