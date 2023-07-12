<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function userLogin(){
    
    }
    function userRegister(Request $request){
        return User::create($request->input());
    }
    function OTPToMail(){
    
    }
    function OTPVarified(){
    
    }
    function setPassword(){
    
    }
    function profileUpdate(){
    
    }

}
