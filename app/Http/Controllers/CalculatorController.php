<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){

        return view('frontend.calculator.index');

    }
    public function result(Request $request){
        $watertank=60;
        $wastetank=25;
        $swiming_pool = 25;
        $fence = 0.2 *$request->area;
        $level1_area = 0.7* $request->area;
        $request->number_of_levels ==1 ? $level2_area=0: $level2_area=$level1_area*0.857;
        return view('frontend.calculator.result');

    }
}