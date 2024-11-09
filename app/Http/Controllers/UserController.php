<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index($id){
        $user = User::all();
        return view('user.dashboard',compact('user'));
    }

    public function userDevices($id){
        if(Device::where('user_id',$id)->exists()){
            $userdevices = Device::where('user_id', $id)->get();
            return view('user.user-devices', compact('userdevices'));
        } else {
            return view('user.no-devices');
    }
    }

    public function userProfile($id){
        $user = User::find($id);
        $userDevice = Device::where('user_id',$id)->count();
        if(!$user){
            return response(404);
        }
        return view('user.profile',compact('user','userDevice'));
    }

    public function editUserProfile($id){
        $normaluser = User::find($id);
        return view('user.user-profile-edit',compact('normaluser'));

    }

    public function updateUserProfile(Request $request,$id){

        if(User::where("id",$id)->exists()){
            $normalUser = User::find($id);

            $normalUser->name =!empty($request->name) ? $request->name : $normalUser->name;
            $normalUser->email =!empty($request->email) ? $request->email : $normalUser->email;

            $normalUser->save();

            return response()->json([
                'result' => 'User updated'
            ]);

        }

}

public function changePassword($id){
    $user = User::find($id);
    return view('user.change-password',compact('user'));
}

public function updatePassword(Request $request, $id){
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|string|min:8|max:30|confirmed',
    ]);

    $user = User::findOrFail($id);

    if (!Hash::check($request->old_password, $user->password)) {
        return back()->with('error', 'Current password does not match.');
    }

    $user->password = Hash::make($request->new_password);

    $user->save();

    return response()->json([
        'result' => 'Password updated'
    ]);
}

}
