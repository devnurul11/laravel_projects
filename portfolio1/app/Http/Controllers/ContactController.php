<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function page(Request $request){
        $seo = DB::table('seopropertices')->where('pageName', '=' , 'Contact')->first();
        return view('pages.contact', ['seo'=>$seo]);
    }
    function contactRequest(Request $request){
    
        
            return DB::table('contact')->insert($request->input());
        
    }
}
