<?php

use Illuminate\Support\Facades\Route;
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
// view表示：テスト一覧
Route::get('/', [TestController::class, 'indexTest']);

// 並び替え処理
Route::get('/sort', [TestController::class, 'sortTest']);

// セッション情報の削除
Route::get('/reset', [TestController::class, 'destroySession']);

// view表示：テスト追加
Route::get('/add', [TestController::class, 'createTest']);

// テスト追加確認処理
Route::post('/add', [TestController::class, 'confirmCreateTest']);

// テスト追加処理
Route::patch('/add', [TestController::class, 'storeTest']);

// view表示：テスト編集
Route::get('/edit/{id}', [TestController::class, 'editTest']);

// テスト追加確認処理
Route::post('/edit/{id}', [TestController::class, 'confirmEditTest']);

// テスト追加処理
Route::patch('/edit/{id}', [TestController::class, 'updateTest']);

// テスト削除確認処理
Route::get('/delete/{id}', [TestController::class, 'deleteTest']);

// テスト削除処理
Route::post('/delete/{id}', [TestController::class, 'destroyTest']);
