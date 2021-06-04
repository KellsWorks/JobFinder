<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use Auth;
use App\Models\SavedJobs;
use App\Models\UserNotifications;
use App\Models\Profiles;

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
        return view('adminHome');
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

    public function change_picture(Request $request){


        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage\profiles'), $imageName);

        $profile = Profiles::find(Auth::user()->id);

        $profile->avatar = $imageName;
        $profile->update();

        return redirect()->back()->with('status', 'Your profile picture has been updated successfully!');

    }
}
