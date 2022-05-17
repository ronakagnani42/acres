<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addHome;
use Illuminate\Support\Facades\DB;
class addHomeController extends Controller
{
   function addHomeForm(Request $req){
       //dd($req);
       $name='';
       if ($req->hasFile('input_image'))
        $image = $req->file('input_image');
        $name = md5(uniqid()).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

        dd($image);

        $result=DB::table('newhomes')->insert([
            'flat_number'=> $req->house_flat_number,
            'address_line1'=> $req->address_line1,
            'address_line2'=> $req->address_line_2,
            'area'=> $req->area,
            'city'=> $req->city,
            'buyORrent'=> $req->buyORrent,
            'price'=> $req->price,
            'bhk'=> $req->bhk,
            'door_facing'=> $req->door_facing,
            'image'=>$name
        ]);
       if($result){
            echo"Success";
        }
        else
            echo"Failed";
        }
   }

