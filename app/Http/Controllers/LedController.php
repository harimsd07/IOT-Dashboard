<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LedController extends Controller
{
    public function show()
    {
        $ledStatus = DB::table('led_status')
            ->latest()->first();

        if ($ledStatus) {
            return response()->json(['status' => $ledStatus], 200);
        } else {
            return response()->json(['status' => null], 200); // Or 404 if you want to indicate "not found"
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if (!isset($data['led']) || ($data['led'] != 'on' && $data['led'] != 'off')) {
            return response()->json(['error' => 'Invalid or missing "led" status'], 400);
        }

        $ledStatus = $data['led'];

        DB::table('led_status')->insert([
            'led_status' => $ledStatus,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'LED status stored: ' . $ledStatus, 'status' => $ledStatus], 200);
    }

}
