<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialesController;
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

Route::get('/hello', function () {
    return "Hola mundo";
});

Route::get('/hello/en', function () {
    return "Hello world";
});

Route::get('/hello/{name}', function ($name) {
    return "Hola $name";
});

Route::controller(EditorialesController::class)->group(function()
{
    Route::get('/editoriales/index','index')->name('editoriales.index');
    Route::get('/editoriales/create','create')->name('editoriales.create');
    Route::post('/editoriales','store')->name('editoriales.store');
    Route::get('/editoriales/edit/{id}','edit')->name('editoriales.edit');
    Route::post('/editoriales/{id}','update')->name('editoriales.update');
    Route::get('/editoriales/{id}','destroy')->name('editoriales.destroy');

});

