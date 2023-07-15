<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::post('/userLogin', [UserController::class, 'userLogin']);
Route::post('/userRegister', [UserController::class, 'userRegister']);
Route::post('/OTPToMail', [UserController::class, 'OTPToMail']);
Route::post('/OTPVarified', [UserController::class, 'OTPVarified']);
Route::post('/setPassword', [UserController::class, 'setPassword']);
Route::post('/profileUpdate', [UserController::class, 'profileUpdate']);




// Route::get('/', function () {
//     return view('backend.pages.dashboard');
// });

// Route::get('/log', function () {
//     return view('backend.pages.register');
// });
