<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', 'UserController@signin')->name('user.signin');
    Route::post('/user/login', 'UserController@login')->name('user.login');
    Route::resource('user', 'UserController', ['only' => ['create', 'store']]);
});

Route::group(['middleware' => 'auth'], function() {
    Route::post('/user/logout', 'UserController@logout')->name('user.logout');
    Route::resource('word', 'WordController', ['only' => ['index', 'create', 'store', 'edit','update','destroy']]);
    Route::get('/conversation/{id}', 'ConversationController@show')->name('conversation.show');
    Route::get('/basic/{id}', 'BasicController@show')->name('basic.show');
});

Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::resource('conversation', 'ConversationController',['only' => ['store','edit','update','destroy']]);
    Route::get('conversation/{id}/create', 'ConversationController@create')->name('conversation.create');

    Route::resource('basic', 'BasicController',['only' => ['store','edit','update','destroy']]);
    Route::get('basic/{id}/create', 'BasicController@create')->name('basic.create');

    Route::resource('user', 'UserController', ['only' => ['index', 'edit', 'update', 'destroy']]);

    Route::resource('chapter', 'ChapterController');

    Route::resource('classification', 'ClassificationController',['only' => ['store','edit','show','update','destroy']]);
    Route::get('classification/{id}/create', 'ClassificationController@create')->name('classification.create');
});