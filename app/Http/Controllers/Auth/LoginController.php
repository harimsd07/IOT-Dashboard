<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function register(){
        return view('register');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3|max:30|string',
            'role'=>'required',
            'email'=>'required|string|max:128|unique:users',
            'password'=>'required|string|min:8|max:30'
        ]);

        User::create(array_merge(
            $validator->validated(),
            ['password' => Hash::make($request->password)]
        ));
        return redirect()->route('login_form');
    }
    public function login()
    {
        return view('login');
    }

    public function loginStore(Request $request)
    {
        $credentials = request(['email', 'password']);
        if (Auth::attempt($credentials))
        {
            $user = Auth::user();
            if ($user->role == 'admin')
            {
                return redirect()->route('welcome-admin');
            } elseif($user->role == 'user')
                    {
                        $request->validate(
                            [
                                'email'    => 'required|string',
                                'password' => 'required|string',
                            ]
                        );

                        $devices =User::where("email","=",$request->email)->first();
if(isset($devices->id))
                        {
                                if(Hash::check($request->password,$devices->password))
                                {
                                    // create a token
                                    $token = $devices->createToken("access_Token")->plainTextToken;

                                    // send a response
                                    return redirect()->route('user-dashboard',['id' => $user->id]);

                                    //    return response()->json([
                                    //     'status' =>1,
                                    //     "message" =>"user logined successfully",
                                    //     "token" =>$token
                                    //    ]);
                                }

                        if (Auth::guard()->attempt($request->only('email', 'password')))
                        {
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

        return redirect()->route('login_form');
    }

}
