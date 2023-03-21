<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index() {
        $datax["nama"] = "Agus";
        $datax["asal"] = "bandung";

        print_r($datax);
       // return view ('v_latihan1', $datax);
       return view ('v_latihan1')
       ->with('data', $datax);
    }
}
