<?php

Route::get(
    '/', function () {
        return view('index');
    }
);

Route::post('login', 'UserController@login');
Route::post('api/register', 'UserController@register');
Route::get('logout', 'UserController@logout');

Route::get('api/admin/accounts', 'AdminController@accounts');
<<<<<<< HEAD
Route::get('api/admin/getDoublons', 'AdminController@getDoublons');
=======
Route::get('api/admin/anomalies', 'AdminController@anomalies');

Route::get('api/me', 'UserController@me');
>>>>>>> e763bcf77962cb7ebef3936c02f458799bebeff4

Route::get('api/categories', 'CategorieController@getCategories');
Route::get('api/laboratoires', 'LaboratoireController@getLaboratoires');
Route::get('api/publications', 'PublicationController@getPublications');
Route::put('api/publications', 'PublicationController@addPublications');
