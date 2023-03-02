<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\TasksController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::any('/add', [TasksController::class, "add"]);
Route::any('/viewlist', [TasksController::class, "view"]);
Route::any('/del', [TasksController::class, "delete"]);
Route::any('/edit', [TasksController::class, "edit"]);
Route::any('/setStart', [TasksController::class, "setStart"]);
Route::any('/setFinish', [TasksController::class, "setFinish"]);
