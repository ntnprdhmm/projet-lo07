<?php

Route::get('/', function () {
    return view('index');
});

Route::post('api/login', 'UserController@login');
Route::post('api/register', 'UserController@register');


Route::get('api/admin/accounts', 'AdminController@accounts');

Route::post('getCategories', 'CategorieController@getCategories');
Route::post('getLaboratoires', 'LaboratoireController@getLaboratoires');