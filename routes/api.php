<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSubController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\LignUserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::post('upload',[EntreprisesController::class,'Upload']);
Route::get('getimage/{id1}/{id2}',[RegisterController::class,'GetImage']);
Route::get('getAll',[AdminController::class,'GetAdmin']);
Route::resource("LignUser",LignUserController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function(){
    //Route::resource('Entreprises',EntreprisesController::class);
    Route::post('addAdmin', [AdminController::class,'register']);
    Route::post('addEntreprise',[EntreprisesController::class,'register']);
});
