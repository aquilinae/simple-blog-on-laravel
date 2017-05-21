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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ['as' => 'posts', 'uses' => 'PostsController@index']);

/*
Это должно быть внутри middleware,
но с недавнего времени routes.php разбит на несколько файлов,
поэтому пока положу сюда
Подробнее: https://youtu.be/PGODmKkyrwM?list=PLZU0qJlzY07VUuIShxnB49egpAxbmKY-c
с 1:13
*/
Route::resource('posts', 'PostsController');
