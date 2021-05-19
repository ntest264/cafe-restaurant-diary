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
Route::get('/', 'ShopsController@index');

//あえてresourceは使わない：エラーが出たときにたどりやすいようにするため。
// 登録店舗の個別詳細・編集ページ表示（これは編集ページになれる？）
Route::get('shops/{id}', 'ShopsController@show');

// お店情報の新規登録を処理（新規登録画面を表示するためのものではない）
Route::post('shops', 'ShopsController@store');

// お店情報の更新処理（編集画面を表示するためのものではない）
Route::put('shops/{id}', 'ShopsController@update');

// 登録店舗を削除
Route::delete('shops/{id}', 'ShopsController@destroy');

//以下は補助ページ　nameは「名前付きルート」：特定のルートへのURLを生成したり、リダイレクトしたりする場合に便利
// index: showの補助ページ（一覧ページ）
Route::get('shops', 'ShopsController@index')->name('shops.index');

// create: 新規作成用のフォームページ
Route::get('shops/create', 'ShopsController@create')->name('shops.create');

// edit: 更新用のフォームページ
Route::get('shops/{id}/edit', 'ShopsController@edit')->name('shops.edit');






