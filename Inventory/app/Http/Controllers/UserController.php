<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function userLogin(Request $request){
            $res = User::where($request->input())->count();

            if ($res == 1){
                //token create
                $token = JWTToken::createJWTToken($request->input('email'));
                return response()->json([
                'msg' =>'Succes',
                'data' => $token
                ]);
            }
        else {
            return response()->json([
                'msg' =>'Faild',
                'data' => 'unthurized'
            ]);
        }
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