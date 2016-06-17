<?php
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/about', ['as' => 'about', 'uses' => '\GdaDesenv\AdminAbout\Controllers\AboutController@index']);
    Route::post('/about', ['as' => 'about.update', 'uses' => '\GdaDesenv\AdminAbout\Controllers\AboutController@update']);
});