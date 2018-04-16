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


Route::group([
    'as'        => 'semakan.',
], function () {
		Route::any('/', 'HomeController@index')->name('index');
		Route::any('/semak', 'HomeController@index')->name('index');

		Route::any('/multiple', 'HomeController@multiple')->name('multiple');
});
