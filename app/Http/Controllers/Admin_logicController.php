<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Admin_logicController extends Controller
{
    public function showloginform()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('analysis');
            }
            else{
                $request->validate(
                    [
                        'email'    => 'required|string',
                        'password' => 'required|string',
                    ]
                );
                $devices =User::where("email","=",$request->email)->first();

                if(isset($devices->id)){
                        if(Hash::check($request->password,$devices->password)){
                            // create a token
                            $token = $devices->createToken("access_Token")->plainTextToken;

                            // send a response
                       return redirect()->route('user-dashboard');

                    //    return response()->json([
                    //     'status' =>1,
                    //     "message" =>"user logined successfully",
                    //     "token" =>$token
                    //    ]);
                }

                if (Auth::guard()->attempt($request->only('email', 'password'))) {
                    $request->session()->regenerate();

                    return response()->json([], 204);
                }

                throw ValidationException::withMessages(['email' => 'Invalid credentials']);
            }
        }
        return redirect('login_form');
    }
}

    public function logout()
    {
        Session::flush();

        return redirect()->route('user-register');
    }
}
