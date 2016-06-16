<?php
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/about', ['as' => 'about', 'uses' => '\GdaDesenv\GdaAbout\Controllers\AboutController@index']);
    Route::post('/about', ['as' => 'about.update', 'uses' => '\GdaDesenv\GdaAbout\Controllers\AboutController@update']);
});