<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('getDracoDaily', 'DracoController@getDracoDaily');
Route::get('getDracoWeekly', 'DracoController@getDracoWeekly');
Route::get('getDracoMonthly', 'DracoController@getDracoMonthly');
Route::get('getDracoAll', 'DracoController@getDracoAll');
