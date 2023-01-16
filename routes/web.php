<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PageController@index')->name('home');

Route::get('/about', function () {

    return view('pages.about');
});

Route::get('/{key}', 'SingleController@showMovie')->name('single');
