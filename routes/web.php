<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogControllerMaster;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleMonoController;


Route::get('/blog/{blog}', [BlogController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/faq', [FaqController::class, 'index']);
Route::post('/faq', [FaqController::class, 'store']);
Route::get('/faq/create', [FaqController::class, 'create']);
Route::get('/faq/{faq}/edit', [FaqController::class, 'edit']);
Route::put('/faq/{faq}', [FaqController::class, 'update']);

Route::get('/about', [AboutController::class, 'show']);

Route::get('/article', [ArticleController::class, 'index']);
Route::post('/article', [ArticleController::class, 'store']);
Route::get('/article/create', [ArticleController::class, 'create']);
Route::get('/article/{article}', [ArticleController::class, 'show']);
Route::get('/article/{article}/edit', [ArticleController::class, 'edit']);
Route::put('/article/{article}', [ArticleController::class, 'update']);


Route::get('/profile', [ProfileController::class, 'show']);
