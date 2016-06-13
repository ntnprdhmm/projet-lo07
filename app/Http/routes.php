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
Route::get('api/admin/getDoublons', 'AdminController@getDoublons');

Route::get('api/categories', 'CategorieController@getCategories');
Route::get('api/laboratoires', 'LaboratoireController@getLaboratoires');
Route::get('api/publications', 'PublicationController@getPublications');
Route::put('api/publications', 'PublicationController@addPublications');