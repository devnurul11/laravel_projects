<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    function page(Request $request){
        $seo = DB::table('seopropertices')->where('pageName', '=' , 'Home')->first();
        return view('pages.home', ['seo' =>$seo]);
    }
    function herodata(Request $request){
        return DB::table('heropropertices')->first();
    }
    function aboutdata(Request $request){
        return DB::table('abouts')->first();
    }
    function socialdata(Request $request){
        return DB::table('socials')->first();
    }
}
