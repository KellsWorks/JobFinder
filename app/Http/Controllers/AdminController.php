<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobsCategory;
use App\Models\Districts;
use App\Models\Jobs;
use App\Models\JobTags;
use App\Models\JobsQualifications;
use App\Models\JobSkills;

class AdminController extends Controller
{
    public function postedJobs(){
        return view('admin.posted-jobs');
    }
    public function siteUsers(){
        return view('admin.users');
    }
    public function settings(){
        return view('admin.settings');
    }

    public function newJob(Request $request){

        $categories = JobsCategory::all();
        $districts = Districts::orderBy('name', 'asc')->get();

        return view('admin.includes.new-job', ['categories' => $categories, 'districts' => $districts]);
    }

    public function addJob(Request $request){


        $request->validate([

            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);


        $tags_ = explode(',' , $request->tags);
        $qualifications_ = explode(',' , $request->qualifications);
        $skills_ = explode(',' , $request->skills);

        $imageName = time().'.'.$request->logo->extension();

        $request->logo->move(public_path('img\companies'), $imageName);

        $categoryId = JobsCategory::where('category', $request->get('category_'))->get()[0]['id'];

        $job = new Jobs();
        $job->jobs_category_id = $categoryId;
        $job->title = $request->title;
        $job->employer = $request->employer;
        $job->employer_email = $request->email;
        $job->employer_logo = $imageName;
        $job->description = $request->description;
        $job->content = $request->content;
        $job->closing_date = $request->date_;
        $job->location = $request->get('location');
        $job->duration = $request->duration;
        $job->salary = $request->salary;

        $job->save();

        for ($i=0; $i < count($tags_); $i++) {

            $jobTags = JobTags::create([
                'jobs_id' => $job->id,
                'tag' => $tags_[$i]
            ]);
        }


        for ($i=0; $i < count($skills_); $i++) {
            $jobSkills = JobSkills::create([
                'job_id' => $job->id,
                'name' => $skills_[$i]
            ]);
        }


        for ($i=0; $i < count($qualifications_) ; $i++) {
            $jobQualifications = JobsQualifications::create([
                'job_id' => $job->id,
                'name' => $qualifications_[$i]
            ]);
        }



        return redirect('admin/home')->with('status', 'Job posted successfully!');
    }
}
