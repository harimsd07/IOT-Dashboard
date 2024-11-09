<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function welcomeAdmin(){
        $user =User::all();
        return view('admin.admin-dashboard',compact('user'));
    }
    public function analytic(){
        $totalAllUser = User::count();
        $totalAdminUser =User::where('role','admin')->count();
        $totalUser = User::where('role','user')->count();
        $totalDevice =Device::count();

        return view('admin.analysis',compact('totalAllUser','totalAdminUser','totalUser','totalDevice'));
    }
    public function index()
    {
        $users = User::all();
        return view('admin.users',compact('users'),[
            'session_id' => session()->getId(),
            'other_data' => session('other_data_key'),
        ]);
    }

    public function create(){
        return view('admin.create_user');
    }

     public function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|min:3|max:20',
            'role'=>'required',
            'email'=>'required|unique:users|string',
            'password'=>'required|min:8|max:30|'
        ]);
        User::create(array_merge(
            $validator->validated(),  // return a array of data which has passed the validation from above or retrives the data and return into array
            ['password' => Hash::make($request->password)]
        ));
        return response()->json([
            'result' => 'User created'
        ]);
    }

    public function getProfile(Request $request) {
        return new UserResource(Auth::user());
    }

    public function edit($id){
        $users = User::find($id);
        return view('admin.edit-user',compact('users'));
    }
    public function updateProfile(Request $request,$id){

        if(User::where("id",$id)->exists()){
            $user = User::find($id);

            $user->name =!empty($request->name) ? $request->name : $user->name;
            $user->email =!empty($request->email) ? $request->email : $user->email;

            $user->save();

            return response()->json([
                'result' => 'User updated'
            ]);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    // public function logout(Request $request)
    // {
    //     Auth::guard()->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return response()->json([], 204);
    // }
}
