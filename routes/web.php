<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\AlreadyLoggedIn;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;


Route::get('/login', function () {
    return view('Auth.login');
});

Route::get('/register', function () {
    return view('Auth.register');
});
Route::get('/welcome', [AuthController::class, 'welcome']);

Route::get('/save', [AuthController::class, 'save']);

Route::post('/Userlogin', [AuthController::class, 'Userlogin'])->name('userlogin')->middleware('isLoggedIn');

Route::post('/logout', [AuthController::class, 'logout']);

//
// Route::group(['middleware' => AlreadyLoggedIn::class], function () {
//     Route::get('/login', [AuthController::class, 'login']);
//     Route::get('/register', [AuthController::class, 'registration']);
// });

Route::get('/student-registration', [StudentRegistrationController::class,'index']);

Route::get('/form-save', [StudentRegistrationController::class,'save']);
