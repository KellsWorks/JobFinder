<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class PagesController extends Controller
{
    public function jobs(){
        return view('jobs');
    }

    public function error(){
        return view('errrors.404');
    }

    public function job($id){

        $jobs  = Jobs::findOrFail($id);

        return view('job', ['jobs'  => $jobs ]);
    }

    public function search_results(){
        return view('search-results');
    }
}
