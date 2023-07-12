<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;


//page route

Route::get('/',[HomeController::class, 'page']);
//Route::get('/',[HomeController::class, 'pagesss']);

Route::get('/contact',[ContactController::class, 'page']);
Route::get('/resume',[ResumeController::class, 'page']);
Route::get('/projects',[ProjectController::class, 'page']);


//ajax call route

Route::get('/herodata',[HomeController::class,'herodata']);
Route::get('/aboutdata',[HomeController::class,'aboutdata']);
Route::get('/socialdata',[HomeController::class,'socialdata']);
Route::get('/projectsdata',[ProjectController::class,'projectsdata']);
Route::get('/skillsdata',[ResumeController::class,'skillsdata']);
Route::get('/educationsdata',[ResumeController::class,'educationsdata']);
Route::get('/languagesdata',[ResumeController::class,'languagesdata']);
Route::get('/experiencedata',[ResumeController::class,'experiencedata']);
Route::get('/resumelinkdata',[ResumeController::class,'resumelinkdata']);
Route::post('/contactRequest',[ContactController::class,'contactRequest']);


// another 