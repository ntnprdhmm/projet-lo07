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

Route::get('api/admin/anomalies', 'AdminController@anomalies');

Route::get('api/me', 'UserController@me');

Route::get('api/categories', 'CategorieController@getCategories');
Route::get('api/collaborateurs/{id}', 'PublicationController@getCollaborateurs');
Route::get('api/laboratoires', 'LaboratoireController@getLaboratoires');
Route::get('api/publications', 'PublicationController@getPublications');
Route::get('api/publication', 'PublicationController@getPublication');
Route::put('api/publications', 'PublicationController@addPublications');
Route::post('api/publication', 'PublicationController@updatePublication');
