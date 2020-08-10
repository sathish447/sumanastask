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


Route::get('/', 'Pagecontroller@Home');
Auth::routes();

Route::get('createmagazine', 'MagazineController@Create');
Route::post('magazineupdate', 'MagazineController@Update');
Route::get('magazinelist', 'MagazineController@List');

Route::get('subscribe', 'SubscriptionController@index');
Route::post('subscribe', 'SubscriptionController@store');
