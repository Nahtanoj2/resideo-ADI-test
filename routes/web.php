<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::redirect('/', '/home');
Route::get('/home', [TaskController::class, 'index']);
Route::get('/complete', [TaskController::class, 'completed']);

Route::post('/', [TaskController::class, 'store']);
Route::post('/tasks/{task}', [TaskController::class, 'update']);
Route::post('/complete/{task}', [TaskController::class, 'completeTask']);
