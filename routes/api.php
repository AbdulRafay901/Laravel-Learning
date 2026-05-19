<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\apiController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\sanctumController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/Api', function(){
    return ["Name" => "Rafay", "Skill" => "Full stack Web developer"];
});


Route::get('/students', [apiController::class, 'GET']);

Route::post('/apiPost', [apiController::class, 'POST']);

Route::put('/apiUpdate', [apiController::class, 'PUT']);

Route::delete('apiDelete/{id}', [apiController::class, 'Delete']);

// Api Use With Resource -------------------------- Start

// Acha ab ye Api with resource kiya hota he ye haam jaab use krte hen
// Jaab hamhe controllers me bane banae function chaiye ho jese index edit destroy
// Crud operation ke function ke liye  use hota he or isme route ke saat resource 
// Likhte he ab example hamhe agar  request me post hoga to controller me 
// Store function automatic chal jayega call krne ki zaroort nhi paregi or agar get hoga to
// index function chal jayega agar request me delete hoga to destroy function chal jayega
// Isko check krne ke liye ham thunder Api tester use krte hen 

// Jaab hamhe controller me crud function automatic banane hoto use hota he 

// php artisan make:controller resourceController --resource

Route::resource('resource', resourceController::class);

// Api Use With Resource -------------------------- End


// Api SignUp with laravel Sanctum ----------- Start

Route::post('login', [sanctumController::class, 'login']);
Route::post('signup', [sanctumController::class, 'signup']);


Route::group(["middleware"=>"auth:sanctum"], function(){
    Route::get('/students', [apiController::class, 'GET']);
});

Route::get('login', [sanctumController::class, 'login'])->name('login');
// Api SignUp with laravel Sanctum ----------- End
