<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\LedController;
use App\Http\Controllers\MetricsController;
use App\Http\Controllers\TemperatureHumidityController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;



Route::post('/admin_login',[LoginController::class,'loginStore'])->name('admin_login');



Route::middleware(['auth:sanctum'])->group(function() {
    Route::get('/devices', [DevicesController::class, 'index']);
    Route::get('/devices/{id}', [DevicesController::class, 'get']);
    Route::post('/devices', [DevicesController::class, 'store']);
    Route::patch('/devices/{id}', [DevicesController::class, 'update']);
    Route::delete('/devices/{id}', [DevicesController::class, 'delete']);

    Route::get('/metrics/{id}', [MetricsController::class, 'get']);
    Route::delete('/metrics/{id}', [MetricsController::class, 'delete']);

    Route::get('/profile', [AuthController::class, 'getProfile']);
    Route::patch('/profile', [AuthController::class, 'updateProfile']);
});

Route::post('/metrics/{token}', [MetricsController::class, 'store']);

Route::get('/health', function() {
    return response()->json(['Iam' => 'fine']);
});


/*
Route::get('/led-control',[TestController::class,'show']);
Route::get('/led-control/status',[TestController::class,'checkStatus']);
Route::post('/led-status',[TestController::class,'store']);
*/


Route::get('ledStatusGet',[LedController::class,'show']);
Route::post('ledStatusPost',[LedController::class,'store']);

use Illuminate\Http\Request;
use GuzzleHttp\Client;

Route::post('/led/off', function () {
    $client = new Client();
    try {
        $response = $client->get('http://192.168.116.57/on'); // Replace with your NodeMCU's IP
        return response()->json(['status' => 'LED turned OFF']);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to connect to NodeMCU'], 500);
    }
});

Route::post('/led/on', function () {
    $client = new Client();
    try {
        $response = $client->get('http://192.168.116.57/off'); // Replace with your NodeMCU's IP
        return response()->json(['status' => 'LED turned ON']);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to connect to NodeMCU'], 500);
    }
});
