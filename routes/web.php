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


Route::get('/', "ArticlesList@get");
Route::get('/article', function () {
    return view('article');
});


//Route::get('/names', "UserList@any");
Route::get('/save-articles', "ArticlesController@create");
//Route::get('/names', "App\Http\Controllers\UserList@any");




