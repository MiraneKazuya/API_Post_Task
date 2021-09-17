<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class MathController extends Controller
{
    

    public function list(Request $request){

      $token = "vI2u53seqMJc7ZcnyZt064Qf3cYpYXGM";
      $value1 = $request->input("q");
      $value2 = $request->input("language");

      if(is_null($request)){
        $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/ipaddress?apikey=$token&q=196.168.10.5")->json();
        return view("welcome", ['data'=>$data]);
      }

      
      $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/ipaddress?apikey=$token&q=$value1")->json();
      
      return view("welcome", ['data'=>$data]);
    }
}
