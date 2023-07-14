<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    function userLogin(Request $request){
            $res = User::where($request->input())->count();

            if ($res == 1){
                //token create
                $token = JWTToken::createJWTToken($request->input('email'));
                return response()->json(['msg' =>'Succes','data' => $token]);
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
    function OTPToMail(Request $request){
        $UserMail = $request->input('email');
        $otp = rand(1000, 9999);

        //mail chaeck method
        $res = User::where($request->input())->count();
        if ($res == 1) {

            //mail sent method
            Mail::to($UserMail)->send(new OTPMail($otp));

            //database update by otp
            User::where($request->input())->update(['otp'=>$otp]);
            return response()->json(['msg' =>'Succes', 'data'=>'Otp sent to you mail']);
        }else{

            return response()->json([
                'msg' =>'Faild',
                'data' => 'unthurized'
            ]);
        }
    }
    function OTPVarified(Request $request){
        $res = User::where($request->input())->count();
        if($res ==1 ){
        User::where($request->input())->update(['otp'=>"0"]);
        return response()->json(['msg' =>'Succes', 'data'=>'Verified']);
        }else{
            return response()->json(['msg' =>'Faild', 'data' => 'unthurized']);
        }
        
    }
    function setPassword(Request $request){
        $pass = $request->input('password');
        User::where($request->input())->update(['password'=>$pass ]);
        return response()->json(['msg' =>'Succes', 'data'=>'Updated']);
    }
    function profileUpdate(){
    
    }

    
}