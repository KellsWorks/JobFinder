<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function create(Request $request){

        $activity = new Activity();

        $activity->icon = $request->icon;
        $activity->content = $request->content;
        $activity->status = 'unread';

        $user = User::findOrFail($request->user_id);
        $user->activity()->save($activity);

        return response()->json([
            'message' => 'success'
        ]);
    }

    public function deleteOne(Request $request){

        $activity = Activity::findOrFail($request->id);
        $activity->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }

    public function deleteAll(Request $request){

        $activity = Activity::where('user_id', $request->user_id)->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
