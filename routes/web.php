<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CalculationController;

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
    Route::get('/', 'index')->name('top');
});

// 会員情報変更テスト関連
Route::controller(TestController::class)->group(function () {
    // 会員情報変更画面
    Route::get('/test/index', 'index')->name('test-A');
    // 会員情報変更確認画面
    Route::post('/test/confirm', 'confirm')->name('confirm');
    // 会員情報更新
    Route::post('/test/complete', 'complete')->name('complete');
});

// 計算ツールテスト関連
Route::controller(CalculationController::class)->group(function () {
    // 計算ツール画面
    Route::get('/calculation/index', 'index')->name('test-B');
    // 計算実行
    Route::post('/calculation/execution', 'execution')->name('execution');
});
