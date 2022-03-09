<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\V1\PostController as PostControllerV1;
use App\Http\Controllers\Api\V2\PostController as PostControllerV2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Version 1
Route::apiResource('v1/posts', PostControllerV1::class)->only(['index','show','destroy'])->middleware('auth:sanctum');

//Version 2
Route::apiResource('v2/posts', PostControllerV2::class)->only(['index','show'])->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);

