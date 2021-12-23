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

    Route::get('/denuncia/buscar', 'denunciaController@buscar')->name('denuncias.buscar');

    Route::get('/denunciante/buscarMail/{correoDenunciante}/{rutDenunciante}', 'denuncianteController@buscarMail')->name('denunciantes.buscarMail');
    Route::post('/denunciante/Guardar', 'denuncianteController@Guardar')->name('denunciantes.Guardar');

    Route::get('/download/{file}', 'DownloadsController@download');


    // de aqui para abajo son las rutas para que funcionen los crud generados automaticamente.
    Route::get('/denunciante/index', 'denuncianteController@index')->name('denunciantes.index');
    Route::post('/denunciante/store', 'denuncianteController@store')->name('denunciantes.store');
    Route::get('/denunciante/create', 'denuncianteController@create')->name('denunciantes.create');
    Route::get('/denunciante/show/{rutDenunciante}', 'denuncianteController@show')->name('denunciantes.show');
    Route::get('/denunciante/find/{rutDenunciante}', 'denuncianteController@find')->name('denunciantes.find');
    Route::put('/denunciante/update', 'denuncianteController@update')->name('denunciantes.update');
    Route::delete('/denunciante/destroy/{rutDenunciante}', 'denuncianteController@destroy')->name('denunciantes.destroy');
    Route::get('/denunciante/edit/{rutDenunciante}', 'denuncianteController@edit')->name('denunciantes.edit');

    Route::get('/denuncia/index', 'denunciaController@index')->name('denuncias.index');
    Route::post('/denuncia/store', 'denunciaController@store')->name('denuncias.store');
    Route::get('/denuncia/create', 'denunciaController@create')->name('denuncias.create');
    Route::get('/denuncia/show/{id}', 'denunciaController@show')->name('denuncias.show');
    Route::put('/denuncia/update/{id}', 'denunciaController@update')->name('denuncias.update');
    Route::delete('/denuncia/destroy/{id}', 'denunciaController@destroy')->name('denuncias.destroy');
    Route::get('/denuncia/edit/{id}', 'denunciaController@edit')->name('denuncias.edit');

    Route::get('/respuesta/index', 'respuestaController@index')->name('respuestas.index');
    Route::post('/respuesta/store', 'respuestaController@store')->name('respuestas.store');
    Route::get('/respuesta/create/{id}', 'respuestaController@create')->name('respuestas.create');
    Route::get('/respuesta/show/{id}', 'respuestaController@show')->name('respuestas.show');
    Route::put('/respuesta/update/{id}', 'respuestaController@update')->name('respuestas.update');
    Route::delete('/respuesta/destroy/{id}', 'respuestaController@destroy')->name('respuestas.destroy');
    Route::get('/respuesta/edit/{id}', 'respuestaController@edit')->name('respuestas.edit');
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
