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
use App\Http\Controllers\PostController;



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/blog/{post}', [BlogController::class, 'show']);

Route::get('/post/{post}', [PostController::class, 'show']);

Route::get('/blog', [BlogControllerMaster::class, 'show']);

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/faq', [FaqController::class, 'show']);

Route::get('/about', [AboutController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

//Blog: portfolio/blog
//blog

//Blog more ICT field work: portfolio/blog/more-field-work
//blog10

//Blog changelog: portfolio/blog/changelog
//blog9

//Blog feedback from the pitch: portfolio/blog/pitch-feedback
//blog8

//Blog pitch: portfolio/blog/pitch
//blog 7

//Blog my motivation: portfolio/blog/motivation
//blog6

//Blog ICT field work: portfolio/blog/field-work
//blog5

//Blog Personal SWOT analysis: portfolio/blog/u-swot-m8
//blog4

//Blog first feedback: portfolio/blog/first-feedback
//blog3

//Blog programming experience: portfolio/blog/experience
//blog2

//Blog study choice: portfolio/blog/study-choice
//blog1

//Dashboard: portfolio/dashboard
//dashboard

//FAQ: portfolio/faq
//faq

//index: portfolio
//welcome

//my story: portfolio/about
//about

//profile: portfolio/profile
//profile
