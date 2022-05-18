<?php

use \Illuminate\Support\Facades\Route;

/*Route::group(['middleware' => 'frontendguesh'],function(){
    Route::get('login','AuthController@showLoginForm')->name('login.index');
    Route::post('login','AuthController@login')->name('login.post');
});*/

Route::group([],function(){
    Route::get('/','HomeController@index')->name('home.index');
    /*Route::post('logout','AuthController@logout')->name('logout.post');*/
});