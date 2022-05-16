<?php

use App\Http\Controllers\AutoresApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialesapiController;
use App\Http\Controllers\GenerosApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(EditorialesapiController::class)->group(function()
{
    Route::get('/editoriales','index');
    Route::get('/editoriales/search/{id}','show');
    Route::post('/editoriales/create','store');
    Route::put('/editoriales/edit/{id}','update');
    Route::delete('/editoriales/{id}','destroy');
    Route::get('/editoriales/bycode/{code}','details');
});


Route::controller(GenerosApiController::class)->group(function()
{
    Route::get('/generos','index');
    Route::get('/generos/search/{id}','show');
    Route::post('/generos/create','store');
    Route::put('/generos/edit/{id}','update');
    Route::delete('/generos/{id}','destroy');
    Route::get('/generos/bycode/{code}','details');
});

Route::controller(AutoresApiController::class)->group(function()
{
    Route::get('/autores','index');
    Route::get('/autores/search/{id}','show');
    Route::post('/autores/create','store');
    Route::put('/autores/edit/{id}','update');
    Route::delete('/autores/{id}','destroy');
    Route::get('/autores/bycode/{code}','details');
});

