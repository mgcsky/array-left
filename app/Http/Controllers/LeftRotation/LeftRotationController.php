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

        for ($i = 1; $i <= $d; $i++) {
            $rotateValue = null;
            foreach($array as $key => $item) {
                if ($key == 0) {
                    $rotateValue = $item;
                    $array[$key] = $array[$key+1];
                } elseif ($key == $n-1) {
                    $array[$key] = $rotateValue;
                } else {
                    $array[$key] = $array[$key+1];
                }
            }
        }

        return response()->json($array, 200, []);
    }
}