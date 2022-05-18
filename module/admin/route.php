<?php

use \Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'adminguesh'],function(){
    Route::get('login','AuthController@showLoginForm')->name('login.index');
    Route::post('login','AuthController@login')->name('login.post');
});

Route::group(['middleware' => 'adminauth'],function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard.index');
    Route::post('logout','AuthController@logout')->name('logout.post');
});