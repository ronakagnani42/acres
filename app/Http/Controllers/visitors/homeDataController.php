<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newhomes;

class homeDataController extends Controller
{
    public function fetchHomeData(){
        $data = Newhomes::get();
        return view('visitors.home_data',compact('data'));
}
}
