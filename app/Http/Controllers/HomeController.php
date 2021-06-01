<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use Auth;
use App\Models\SavedJobs;

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

        // dd($j);

        return view('user.profile', compact('jobs'));
    }
}
