<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
###ルーティングのテンプレート

Route::group(["middleware" => "api"], function () {
    // 認証が必要ないメソッド
    Route::group(['middleware' => ['jwt.auth']], function () {
        // 認証が必要なメソッド
    });
});
*/


/**
 * ユーザー作成
 */
Route::group(["middleware" => "api"], function () {
    Route::post('/register', 'Auth\RegisterController@register'); // 追加
    Route::group(['middleware' => ['jwt.auth']], function () {
    });
});
