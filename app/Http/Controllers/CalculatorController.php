<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return view('frontend.calculator.index');

    }
    public function result(Request $request){
        
        return view('frontend.calculator.result');

    }
}
