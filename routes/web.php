<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;


Route::get('/', function () {
    return view('welcome');
})->name(name:'home');

Route::get('/login' , [AuthManager::class, 'login'])->name('login');
Route::post('/login' , [AuthManager::class, 'loginPost'])->name('login.post');


Route::get('/registration' , [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration' , [AuthManager::class, 'registrationPost'])->name('registration.post');
   
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::group(['middleware' =>'auth'], function (){
Route::get('/profile' , function(){
    return 'Hi ' . auth()->user()->name;
});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
