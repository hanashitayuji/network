<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(TopController::class)->group(function () {
    // トップ画面
    Route::get('/', 'index');
});

// テスト関連
Route::controller(TestController::class)->group(function () {
    // 会員情報変更画面
    Route::get('/test/index', 'index')->name('test-A');
    // 会員情報変更確認画面
    Route::post('/test/confirm', 'confirm')->name('confirm');
    // 会員情報更新
    Route::post('/test/complete', 'complete')->name('complete');
});
