<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\LED;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TestController extends Controller
{

    public function index()
    {
        return view('led-control');
    }

    public function toggle(Request $request)
    {
        $status = $request->input('status');
        $esp32_ip = 'http://192.168.43.115'; // Make sure this is the correct IP

        try {
            $response = Http::timeout(5)->get($esp32_ip . '/' . $status);

            if ($response->successful()) {
                $message = $status == 'on' ? 'LED turned on' : 'LED turned off';
                return response()->json(['message' => $message]);
            } else {
                return response()->json(['error' => 'ESP32 returned an error: ' . $response->body()], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to connect to ESP32: ' . $e->getMessage()], 500);
        }
    }

}
