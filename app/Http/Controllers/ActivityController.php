<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\User;

class ActivityController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'icon' => ['required'],
            'content' => ['required'],
            'status' => ['required'],
        ]);
    }

    public function create(Request $request){

        $activity = new Activity();

        $activity->icon = $request->icon;
        $activity->content = $request->content;
        $activity->status = 'unread';

        $user = User::findOrFail($request->user_id);
        $user->activity()->save($activity);

        return response()->json([
            'message' => 'success'
        ], 200);

    }

    public function getAll(Request $request){

        $activities = Activity::where('user_id', $request->user_id)->get();

        return response()->json([
            'activities' => $activities
        ], 200);
    }

    public function deleteOne(Request $request){

        $activity = Activity::findOrFail($request->id);
        $activity->delete();

        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function deleteAll(Request $request){

        $activity = Activity::where('user_id', $request->user_id)->delete();

        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
