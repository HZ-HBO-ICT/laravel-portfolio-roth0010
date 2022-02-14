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


Route::get('/blog/{blog}', [BlogController::class, 'show']);

//Route::get('/blog', [BlogControllerMain::class, 'show']);

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/faq', [FaqController::class, 'show']);

Route::get('/about', [AboutController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);
