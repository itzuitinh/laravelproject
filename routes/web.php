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
    return view('home');
});

Route::get('/admin', function(){
    return view('admin.home');
})->middleware('adminrole');
Route::group(['prefix'=>'admin'], function(){
    Route::get('test', function(){
        return 'Test admin';

    });


});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
