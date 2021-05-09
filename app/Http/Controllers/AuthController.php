<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profiles;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $attr['name'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email']
        ]);

        $profile = new Profiles();
        $profile->phone = $request->phone;

        $user = User::find($user->id);
        $user->profile()->save($profile);

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }

    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        if (!Auth::attempt($attr)) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }

    public function profile(Request $request){

        $profile = Profiles::where('user_id', $request->user_id)->get();

        return response()->json($profile, 200);
    }

    public function change_profile_picture(Request $request){


        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage\profiles'), $imageName);

        $userId = Profiles::where('user_id', $request->user_id)->pluck('id');
        $profile = Profiles::findOrFail($userId);
        $profile->photo = $imageName;
        $profile->update();

        return $this->success([
            'profile' => $profile
        ], 'profile picture updated successfully');
    }
}
