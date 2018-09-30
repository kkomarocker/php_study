<?php

// Eloquent Model -> Singular name
// Controller -> Plural
// Migration

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{article}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');
Route::post('/posts/{article}/comments', 'CommentsController@addComment');


