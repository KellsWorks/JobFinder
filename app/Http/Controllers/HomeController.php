<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use Auth;
use App\Models\SavedJobs;
use App\Models\UserNotifications;
use App\Models\Profiles;
use App\Models\User;
use App\Models\JobLikes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Jobs::all();

        return view('home', compact('jobs'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $jobs = Jobs::latest()->get();
        $users = User::all()->count();
        $savedJobs = SavedJobs::all()->count();
        $jobLikes = JobLikes::all()->count();

        return view('adminHome', ['jobs' => $jobs, 'users' => $users, 'savedJobs' => $savedJobs, 'jobLikes' => $jobLikes]);
    }

    public function jobs()
    {
        return view('jobs');
    }

    public function profile(){

        $jobs = Jobs::find(SavedJobs::where('user_id', Auth::user()->id)->pluck('id'));

        $notifications = UserNotifications::where('user_id', Auth::user()->id)->get();
        $profiles = Profiles::where('user_id', Auth::user()->id)->get();

        return view('user.profile', ['jobs' => $jobs, 'notifications' => $notifications, 'profiles' => $profiles]);
    }

    public function update_phone(Request $request){

        $id = Profiles::where('user_id', Auth::user()->id)->pluck('id')[0];

        $profile = Profiles::find($id);

        $profile->phone = $request->phone;

        $profile->update();

        $notification = new UserNotifications();

        $notification->user_id = Auth::user()->id;

        $notification->title = "Profile";

        $notification->category = "Profile";

        $notification->content = "You have recently updated your account phone number";

        $notification->save();

        return redirect()->back()->with('status', 'You have successfully updated your account phone number');
    }

    public function change_picture(Request $request){


        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('storage\profiles'), $imageName);

        $id = Profiles::where('user_id', Auth::user()->id)->pluck('id')[0];

        $profile = Profiles::find($id);

        $profile->avatar = $imageName;

        $profile->update();

        $notification = new UserNotifications();

        $notification->user_id = Auth::user()->id;

        $notification->title = "Profile";

        $notification->category = "Profile";

        $notification->content = "You have recently updated your profile picture";

        $notification->save();

        return redirect()->back()->with('status', 'Your profile picture has been updated successfully!');

    }

    public function notificationRead($id){

        $notification = UserNotifications::find($id);

        $notification->status = "read";

        $notification->update();

        return redirect()->back()->with('status', 'Notification marked as read');
    }

    public function notificationDelete($id){

        $notification = UserNotifications::find($id);
        $notification->delete();

        return redirect()->back()->with('status', 'Notification deleted successfully!');
    }
}
