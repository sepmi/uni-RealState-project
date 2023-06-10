<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class houseController extends Controller
{
    function index (){
        
        $houses=House::where('is_deleted',0)->get();
        return view("index",['houses'=>$houses]);
    }

    function showHouse(Request $req,$id){

        
        

        try{
            $house = House::where('id',$id)->first();
        }
        catch(\Exception $exception){
            abort(404);
        }
        
        return view('showHouse',['house'=>$house ]);
    }

    
}
