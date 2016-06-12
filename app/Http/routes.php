<?php

Route::get(
    '/', function () {
    return view('index');
}
);

Route::post('login', 'UserController@login');
Route::post('api/register', 'UserController@register');

Route::get('api/admin/accounts', 'AdminController@accounts');

Route::get('api/categories', 'CategorieController@getCategories');
Route::post('api/laboratoires', 'LaboratoireController@getLaboratoires');
Route::post('api/publications', 'PublicationController@getPublications');