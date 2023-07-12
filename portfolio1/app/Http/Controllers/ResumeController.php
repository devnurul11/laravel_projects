<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    
    function page(Request $request){
        $seo = DB::table('seopropertices')->where('pageName', '=' , 'Resume')->first();
        return view('pages.resume', ['seo' => $seo]);
    }
    function skillsdata(Request $request){
        return DB::table('skills')->get();
    }
    function educationsdata(Request $request){
        return DB::table('educations')->get();
    }
    function languagesdata(Request $request){
        return DB::table('languages')->get();
    }
    function experiencedata(Request $request){
        return DB::table('experience')->get();
    }
    function resumelinkdata(Request $request){
        return DB::table('resume')->first();
    }
}
