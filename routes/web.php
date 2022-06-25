<?php

use App\Http\Controllers\ConsumeJsonPlaceHolder;
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

Route::get('/', [ConsumeJsonPlaceHolder::class, 'getUsers'])->name('home');
Route::get('user/ver/{id}', [ConsumeJsonPlaceHolder::class, 'getUser'])->name('profile');
Route::get('user/post/{id}', [ConsumeJsonPlaceHolder::class, 'getPostCommentUser'])->name('posts');
Route::get('user/tasks/{id}', [ConsumeJsonPlaceHolder::class, 'getAllTaks'])->name('tasks');
Route::post('user/tasks/{id}', [ConsumeJsonPlaceHolder::class, 'getAllTaksAdd'])->name('taskAdd');
