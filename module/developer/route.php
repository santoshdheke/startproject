<?php

use \Illuminate\Support\Facades\Route;

Route::resource('module', 'ModuleController');
Route::get('module/ajax/add/row', 'ModuleController@ajaxAddRow');
Route::resource('folder', 'FolderController');

