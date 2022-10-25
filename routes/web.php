<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudsController;
use App\models\Crud;

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

Route::get('/create', function(){

    return view('create');
});

Route::post('/insert', CrudsController::class.'@store');//insert data into the database

Route::get('/show', CrudsController::class.'@index');//display data from the database

Route::post('/edit/{{$crud->id}}',CrudsController::class.'@edit');

Route::get('/update', CrudsController::class.'@update');