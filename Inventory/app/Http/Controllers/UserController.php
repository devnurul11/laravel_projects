<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Mockery\Expectation;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{

    function LoginPage():View{
        return view('pages.auth.login-page');   
     }
    function RegistrationPage():View{
        return view('pages.auth.registration-page');   
     }
    function SendOtpPage():View{
        return view('pages.auth.sand-otp-page');   
     }
    function VerifyOTPPage():View{
        return view('pages.auth.verify-otp-page');   
     }
    function ResetPasswordPage():View{
        return view('pages.auth.reset-pass-page');   
     }

     function userLogin(Request $request){
        $count=User::where('email','=',$request->input('email'))
             ->where('password','=',$request->input('password'))
             ->count();
 
        if($count==1){
            // User Login-> JWT Token Issue
            $token=JWTToken::CreateToken($request->input('email'));
            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successful',
            ],200)->cookie('token',$token,60*24*30);
        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ],401);
 
        }
 
     }
    function userRegister(Request $request){
        //return User::create($request->input());

        try {
            // Attempt to create a new user with the provided data
             User::create([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'phone' => $request->input('mobile'),
                'password' => $request->input('password')
            ]); 
        
            // If user creation is successful, respond with a success message
            return response()->json([
                'status' => 'Success',
                'message' => 'User Registration Successful'
            ],200);
        } catch (\Exception $e) {
            // Something went wrong during user creation
            return response()->json([
                'status' => 'failed',
                'message' => 'Something Wrong'
            ], 400);
        }
    }
    function OTPToMail(Request $request){
        $UserMail = $request->input('email');
        $otp = rand(100000, 999999);

        //mail chaeck method
        $res = User::where($request->input())->count();
        if ($res == 1) {

            //mail sent method
            Mail::to($UserMail)->send(new OTPMail($otp));

            //database update by otp
            User::where($request->input())->update(['otp'=>$otp]);
            $otpToken = JWTToken::createOtpJWTToken($request->input('email'));
            return response()->json(['status' =>'Succes', 'message'=>'Otp sent to you mail'],200)->cookie('token', $otpToken);
        }else{

            return response()->json([
                'status' =>'Faild',
                'message' => 'unthurized'
            ],400);
        }
    }
    public function verifyOtp(Request $request)
    {
        $otp = $request->input('otp');
        $email = $request->input('email');
        $user = User::where('otp', $otp)->where('email', $email)->first();
        

        if ($user) {
            // OTP is valid, you can perform any additional actions here if needed
            // For example, update the 'otp' field to mark it as used
            $user->update(['otp' => "0"]);
             $token =JWTToken::createJWTToken($email);
            return response()->json(['status' => 'success', 'message' => 'OTP Verified'], 200)->cookie('token', $token, 60*2) ;
        } else {
            // OTP is invalid
            return response()->json(['status' => 'Fail', 'message' => 'Invalid OTP']);
        }
    }
    function setPassword(Request $request){
    

        try{
            $email=$request->header('email');
            $password=$request->input('password');
            User::where('email','=',$email)->update(['password'=>$password]);
            // Remove Cookie...
            return response()->json([
                'status' => 'success',
                'message' => 'Request Successful',
            ],200);

        }catch (\Exception $exception){
            return response()->json([
                'status' => 'fail',
                'message' => 'Something Went Wrong',
            ],400);
        }
    }
    





    function profileUpdate(){
    
    }

    
}