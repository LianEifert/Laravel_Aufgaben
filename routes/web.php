<?php

use App\Models\Application;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form_create', function () {
    return view('form_create');
});

Route::get('/form_application', function () {
    return view('form_application');
});


Route::post('/form_application', function () {
    $request = request();

    $application = new Application();
    $application->firstname = $request->get('firstname');
    $application->lastname = $request->get('lastname');
    $application->email = $request->get('email');
    $application->answer = $request->get('answer');
    
    $application->save();

    return redirect('/form_application');

});





Route::get('/form_application/applications', function () {
    
    $applications = Application::where('answer', 'yes')->get();

    $declinedapplications = Application::where('answer', 'no')->count();

  



    return view('applications', [
'applications' => $applications,
'declinedapplications' => $declinedapplications,

    ]);
});





