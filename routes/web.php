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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::group(["middleware" => "auth"], function(){

	Route::post("scripts/create", "ScriptController@store"); //新規作成処理

	Route::get("scripts/{param}/edit", "ScriptController@edit"); //編集画面

	Route::patch("scripts/{param}/update", "ScriptController@update"); //更新処理

	Route::get("scripts/sample", "ScriptController@showSample"); //サンプル画面

	Route::delete("diary/{param}/delete", 'DiaryController@destroy');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
