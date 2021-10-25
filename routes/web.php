<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CaptchaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
Route::get('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::get('/forget-password', 'ForgotPasswordController@getEmail')->name('auth.forgot');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');
Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');
Route::post('/auth/submit-form',[CaptchaController::class,'submit_form']);
Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
