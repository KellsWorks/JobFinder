<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;
use App\Models\UserNotifications;

class NotificationsController extends Controller
{
    use ApiResponser;

    public function getUserNotifications(Request $request){

        $notifications = UserNotifications::where('user_id', $request->user_id)->get();

        return(
            $this->success([
                'notifications' => $notifications
            ], 'User notifications')
        );
    }

    public function delete(Request $request){

        $notification = UserNotifications::findOrFail($request->id);
        $notification->delete();

        return(
            $this->success([
                'notification' => 'deleted'
            ], 'Notification deleted')
        );
    }
}
