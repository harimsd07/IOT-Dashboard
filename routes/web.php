<?php

use App\Http\Controllers\Admin_logicController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//====================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================//

Route::middleware(['preventBackHistory'])->group(function(){


Route::middleware(['auth', 'admin'])->group(function () {

    // user control for admin
    Route::get('/welcome',[AuthController::class,'welcomeAdmin'])->name('welcome-admin');//gives the welcomming message for user

    Route::get('/analysis',[AuthController::class,'analytic'])->name('analysis');// this shows us the overall users and devices list

    Route::get('/user', [AuthController::class,'index'])->name('user');  // return a view with all registered user

    Route::get('/register', [AuthController::class,'register'])->name('user-register');// return a view of registration form

    Route::get('/create',[AuthController::class,'create'])->name('user-create'); // this is the view user to create a new user

    Route::post('/store-user', [AuthController::class,'storeUser'])->name('new-user'); // store the registered user which is get displayed in the user list page

    Route::get("/user-edit/{id}",[AuthController::class,"edit"])->name('user-edit'); // this is the view for editing the user

    Route::put("/update-user/{id}", [AuthController::class,"updateProfile"])->name("update-user"); // this is used to edit the user

    Route::get("/user-delete/{id}",[AuthController::class,"destroy"])->name("user-delete");// this is for deleting the user


    // device control for admin

    Route::get('/devices',[DevicesController::class,'deviceList'])->name('admin-view-devices');// gives the overall devices llist for the admin

    Route::post('/store-devices',[DevicesController::class,'store'])->name('new-device');

    Route::get('/create-devices',[DevicesController::class,'createDevice'])->name('device-create');

});


// user dashboard for user
Route::middleware('auth')->group(function(){

Route::get('/user/{id}',[UserController::class,'index'])->name('user-dashboard');//this is the welcomming page for the user

Route::get('/user/profile/{id}',[UserController::class,'userProfile'])->name('user-profile');//this shows the profile of the user

Route::get('/user/profile/edit/{id}',[UserController::class,'editUserProfile'])->name('user-profile-edit');//this is the page for editing the user profile

Route::put('/user/profile/update/{id}',[UserController::class,'updateUserProfile'])->name('user-profile-update');//this is the logical function for updating the user profile

Route::get('/user/devices/{id}',[UserController::class,'userDevices'])->name('user-view-devices');// this is used to list the particular user's device which check the logic for authenticated user

Route::get('/user/change-password/{id}',[UserController::class,'changePassword'])->name('user-change-password');//this is the page to change password

Route::put('/user/update-password/{id}',[UserController::class,'updatePassword'])->name('user-update-password');//this is the logic for the password change

});


// admin control for login

Route::get('/register',[LoginController::class,'register'])->name('register');// this is the register template for user

Route::post('/register', [LoginController::class, 'store'])->name('store-register');//this is the logic for registration

Route::post('/admin_login',[LoginController::class,'loginStore'])->name('admin_login'); //this is used to verify wheather the logined one was admin/user

Route::get('/login',[LoginController::class,'login'])->name('login_form');//this is the login page

Route::get('/logout',[LoginController::class,'logout'])->name('logout');// used for ending the session


});

//=============================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================================== ==//

Route::get('test', function() {
    dd(App\Models\User::all()->toArray());
});

Route::get('/',function(){
    return view("welcome");
});

Route::get("/data", function() {
    return [
        "status"=> "1",
    ];
});

Route::get("sample", function() {
    return "this is sample";
});


// Route::get('/register',[TestController::class,'index'])->name('user-register');

// Route::post('/store-user',[TestController::class,'store']);


// LED Controls //

use App\Http\Controllers\LedController;

Route::get('/led-control', [TestController::class, 'index']);
Route::post('/led-control', [TestController::class, 'toggle']);

