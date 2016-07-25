<?php
//Dashboard
Route::get('/', 'DashboardController@getDashboard')->name('dashboard');
Route::resource('pages', 'PageController');

Route::post('pages/{page}/force-delete', 'PageController@forceDelete')->name('dashboard.pages.force-delete');