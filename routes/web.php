<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CnsController;
use App\Http\Controllers\DeleteController;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('cns', CnsController::class);
    Route::resource('delete', DeleteController::class);
    Route::resource('codigo', DeleteController::class);


    Route::get('import_export', 'App\Http\Controllers\Import_Export_Controller@importExport');
    Route::post('ImportCns', 'App\Http\Controllers\Import_Export_Controller@import');
    Route::get('export', 'App\Http\Controllers\Import_Export_Controller@export');

});




