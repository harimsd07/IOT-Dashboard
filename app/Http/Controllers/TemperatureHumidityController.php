<?php

namespace App\Http\Controllers;

use App\Models\SensorValue;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class TemperatureHumidityController extends Controller
{

    public function show(Request $request){
       $data= $request->all();

        return response()->json([
            "message" => "Data Successfully displayed",
            "date" =>$data,
        ]);
    }

    public function store(Request $request){
       $sensorValue= $request->validate([
            'temperature' =>'required|numeric',
            'humidity' =>'required|numeric',

        ]);

        $data = SensorValue::create([
            'temperature' => $sensorValue['temperature'],
            'humidity' => $sensorValue['humidity'],
        ]);

        return response()->json([
            'message'=>'Data recieved successfully'
        ]);
    }
}
