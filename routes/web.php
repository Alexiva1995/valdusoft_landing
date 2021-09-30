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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('load-new-tab/{tag_id}', [App\Http\Controllers\HomeController::class, 'load_new_tab']);
Route::post('load-more-projects', [App\Http\Controllers\HomeController::class, 'load_more_projects']);
Route::post('contact', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact');
Route::get('show-project/{id}', [App\Http\Controllers\HomeController::class, 'show_project']);
