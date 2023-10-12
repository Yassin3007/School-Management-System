<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Ajax Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
Route::group(['middleware' => 'auth:teacher,web'], function () {
//Route::get('/Get_classrooms/{id}', 'AjaxController@getClassrooms');
Route::get('/Get_classrooms/{id}', [\App\Http\Controllers\AjaxController::class,'getClassrooms']);
Route::get('/Get_Sections/{id}', [\App\Http\Controllers\AjaxController::class,'Get_Sections']);
});
});

