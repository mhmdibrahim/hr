<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(){
//        $regions= DB::select("select * FROM regions");
        $regions= DB::table("regions")->get();
        dd($regions);
//            DB::table("regions")->where('region_id','=',1)              ->update(["region_name","blablabla"]);
        return view("regions")->with('regions',$regions);
    }

    public  function countriesShow(){
        $countries = DB::table('countries')->paginate(5);
        return view('countries')->with('countries',$countries);
    }
}
