<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Models\Application;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


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


Route::get('/form_create', function () {
    return view('form_create');
})->middleware('auth');



Route::post('/form_create', [EventController::class , 'create'])->middleware('auth');


Route::get('/form_application', function () {
    return view('form_application');
});



Route::get('/', [EventController::class, 'list']);

Route::post('/', [EventController::class, 'list']);


Route::post('applications/{id}', [ApplicationController::class , 'create']);

Route::get('/event/{id}', [EventController::class, 'show']);


Route::get('/login', [LoginController::class, 'view'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/applications/{id}', [ApplicationController::class , 'list']);



Route::get('/register', [RegistrationController::class , 'show']);

Route::post('/register', [RegistrationController::class , 'create']);



//To create User with hashed password
Route::get('/add', [LoginController::class, 'add']);





