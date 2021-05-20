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

//トップページ / をShopsControllerのindexアクションに設定。
//indexアクションは、 / にアクセスしたときと、 /shops にアクセスした両方で同じルーティングが設定されたことになる。
//Route::get('/', 'ShopsController@index');
//以下を追加したため一時的にコメントアウト

Route::get('/', function () {
    return view('welcome');
});

//get,post,put,delete,edit,create,showの補助を集約
Route::resource('shops', 'ShopsController');



// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');




