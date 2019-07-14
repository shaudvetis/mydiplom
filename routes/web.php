<?php

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PostsController@index');
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/learn', 'MainController@learnAction');

Route::get('/garvislearn', 'GmainController@garvislearnAction');

Route::get('/garvissisters', 'GsmainController@garvislearnAction');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'DashboardController@indexAction')->name('dashboard');

Route::get('/userpage', 'UserPageController@indexAction')->name('userpage');