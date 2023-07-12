<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function page(Request $request){

        $seo = DB::table('seopropertices')->where('pageName', '=' , 'Projects')->first();
        return view('pages.projects', ['seo'=>$seo]);
    }
    function projectsdata(Request $request){
        return DB::table('projects')->get();
    }
    
    
}

