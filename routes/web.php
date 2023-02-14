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

Route::get('/', function()
{
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index');

Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@novo');
Route::post('/produtos/novo', 'App\Http\Controllers\ProdutosController@novo');

Route::get('/produtos/add', 'App\Http\Controllers\ProdutosController@add');
Route::post('produtos/add', 'App\Http\Controllers\ProdutosController@add');

Route::get('/produtos/{id}/edit', 'App\Http\Controllers\ProdutosController@edit');

Route::post('produtos/update/{id}', 'App\Http\Controllers\ProdutosController@update');

Route::delete('/produtos/delete/{id}', 'App\Http\Controllers\ProdutosController@delete');

Route::fallback(function()
{
    echo 'Essa rota não existe, <a href="'.route('welcome').'">clique aqui </a>para ir para página inicial';
});