<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => '/'], function () {

    Route::get('/sala', 'SalaController@index')->name('sala');


    /*
    Route::get('/sala/{aciona}', function ($aciona) {
        if ($aciona == 0) {
            return $aciona;
        } else {
            return $aciona;
        }
    })->name('sala');
*/

    Route::get('/cozinha', 'CozinhaController@index')->name('cozinha');
    Route::get('/banheiro', 'BanheiroController@index')->name('banheiro');
    Route::get('/quarto', 'QuartoController@index')->name('quarto');
    Route::get('/garagem', 'GaragemController@index')->name('garagem');
    Route::get('/lavanderia', 'LavanderiaController@index')->name('lavanderia');
    Route::get('/jardim', 'JardimController@index')->name('jardim');
});
//Rotas para ligar e desligar lampadas
Route::group(['prefix' => '/lampada'], function ($comodo) {
    Route::get('/ligar/{comodo}', 'LampadaController@ligar');
    Route::get('/desligar/{comodo}', 'LampadaController@desligar');
});
//Rotas para ligar e desligar o ventilador
Route::group(['prefix' => '/ventilador'], function ($comodo) {
    Route::get('/ligar/{comodo}', 'VentiladorController@ligar');
    Route::get('/desligar/{comodo}', 'VentiladorController@desligar');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
