<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes(['register' => false]);

Route::namespace("App\Http\Controllers")->group(function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/denuncia/buscar', 'DenunciaController@buscar')->name('denuncias.buscar');

    Route::get('/denunciante/buscarMail/{correoDenunciante}/{rutDenunciante}', 'DenuncianteController@buscarMail')->name('denunciantes.buscarMail');
    Route::post('/denunciante/Guardar', 'DenuncianteController@Guardar')->name('denunciantes.Guardar');

    Route::get('/download/{file}', 'DownloadsController@download');


    Route::get('/denunciante/find/{rutDenunciante}', 'DenuncianteController@find')->name('denunciantes.find');
    Route::get('/denuncia/index', 'DenunciaController@index')->name('denuncias.index');
    Route::get('/denuncia/show/{id}', 'DenunciaController@show')->name('denuncias.show');
    
    Route::post('/respuesta/store', 'RespuestaController@store')->name('respuestas.store');
    Route::get('/respuesta/create/{id}', 'RespuestaController@create')->name('respuestas.create');
});

Auth::routes();

/* 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::namespace("App\Http\Controllers")->group(function(){
    Route::middleware('auth:sanctum')->group(function(){
        Route::resource('denuncias',denunciaController::class);
        Route::resource('respuestas',respuestaController::class);
        Route::resource('denunciantes',denuncianteController::class);
    });
    
});
   */
