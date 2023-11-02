<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/student', [ApiController::class, 'create']);
Route::put('/student/{id}', [ApiController::class, 'update']);
Route::get('/student/{id}', [ApiController::class, 'getStudent']);
Route::delete('/student/delete/{id}', [ApiController::class, 'deleteStudent']);
Route::get('/students', [ApiController::class, 'getAllStudents']);
