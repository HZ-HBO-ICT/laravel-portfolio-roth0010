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
use App\Http\Controllers\GradeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleMonoController;
use App\Http\Controllers\CourseController;


Route::get('/blog/{blog}', [BlogController::class, 'show']);
Route::get('/blog', [BlogController::class, 'index']);
Route::resource('/faq', FaqController::class);
Route::resource('courses.grade', GradeController::class)->shallow();
Route::resource('courses', CourseController::class);

Route::get('/', [WelcomeController::class, 'show']);

Route::resource('/faq', FaqController::class);

Route::get('/about', [AboutController::class, 'show']);

Route::resource('article', ArticleController::class);


Route::get('/profile', [ProfileController::class, 'show']);
