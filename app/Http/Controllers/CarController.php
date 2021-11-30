<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class CarController extends Controller
{
    public function index(){
       
        $cars = Car::select('brand','model','date','range','color','price')->get();
        
        $carArr = $cars->toArray();
        $carKey = array_keys($carArr[1]);
        return view('car', ['cars' => $cars,'carKey' => $carKey]);   
    }
}
