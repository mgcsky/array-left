<?php

namespace App\Http\Controllers\LeftRotation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeftRotationController extends Controller
{
    public function rotLeft(Request $request)
    {
        $array = data_get($request, "array");
        $d = data_get($request, "d");
        $n = data_get($request, "n");
        $resultArray = [];
        $k = 0;
        //run from d point to array end
        for ($i = $d; $i < $n; $i++) {
            $resultArray[$k] = $array[$i];
            $k++;
        }
        //run from array begin to d point
        for ($i = 0; $i < $d; $i++) {
            $resultArray[$k] = $array[$i];
            $k++;
        }
        return response()->json($resultArray, 200, []);
    }
}