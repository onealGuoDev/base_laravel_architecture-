<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['valid'])->group(function () {

    Route::post('/user/{userId}', 'UserController@getOne')->name('userGetOne'); // 取得單一使用者
    Route::post('/user', 'UserController@postOne')->name('userPostOne');// 新增單一使用者
    Route::put('/user/{userId}', 'UserController@putOne')->name('userPutOne');// 更新單一使用者
    Route::delete('/user/{userId}', 'UserController@deleteOne')->name('userDeleteOne');// 刪除單一使用者

});
