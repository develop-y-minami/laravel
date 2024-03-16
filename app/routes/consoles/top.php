<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consoles\TopController;

/*
|--------------------------------------------------------------------------
| Top Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * index
 * 
 * 管理コンソール：トップページ
 * HTTP Method GET
 * https://{host}
 * 
 * @param Request request リクエスト
 * @return View
 */
Route::get('/', [TopController::class, 'index'])->name('top.index');