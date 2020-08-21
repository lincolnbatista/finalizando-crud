<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('produtos', 'MeuControlador@produtos');

Route::resource('clientes', 'ClienteControlador');

// Route::post('/requisicoes', function(Request $request) {
//     return 'hello post';
// });
// Route::delete('/requisicoes', function(Request $request) {
//     return 'hello delete';
// });
// Route::put('/requisicoes', function(Request $request) {
//     return 'hello put';
// });
// Route::patch('/requisicoes', function(Request $request) {
//     return 'hello patch';
// });
// Route::options('/requisicoes', function(Request $request) {
//     return 'hello options';
// });

