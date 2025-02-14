<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use DebugBar\DataCollector\LocalizationCollector;
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

Route::get('/',[PageController::class, 'main']); 
Route::get('about',[PageController::class,'about'])->name('about');
Route::get('service',[PageController::class,'service'])->name('service');
Route::get('project',[PageController::class,'project'])->name('project');
Route::get('contact',[PageController::class,'contact'])->name('contact');

Route::get('languge/{locale}', [LocalizationController::class, 'change_locale'])->name('locale.change');
Route::resources([
    'posts'=>PostController::class,
    'comments'=>CommentController::class,


]);

Route::get('login',[AuthController::class, 'login'])->name('login');
Route::get('register',[AuthController::class, 'register'])->name('register');
Route::post('register',[AuthController::class, 'register_store'])->name('register.store');
Route::post('authenticate',[AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout',[AuthController::class, 'logout'])->name('logout');
Route::post('app',[AuthController::class,'app'])->name('app');
Route::resource('notifications', NotificationController::class);
// Route::get('notification',[NotificationController::class, 'index'])->name('notification ');