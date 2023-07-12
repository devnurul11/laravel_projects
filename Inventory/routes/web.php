<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::post('/userLogin', [UserController::class, 'userLogin']);
Route::post('/userRegister', [UserController::class, 'userRegister']);
Route::post('/OTPToMail', [UserController::class, 'OTPToMail']);
Route::post('/OTPVarified', [UserController::class, 'OTPVarified']);
Route::post('/setPassword', [UserController::class, 'setPassword']);
Route::post('/profileUpdate', [UserController::class, 'profileUpdate']);

