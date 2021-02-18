<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BananaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//add
Route::post('/addbanana', [BananaController::class, 'add']);

//fetch all
Route::get('/showallbananas', [BananaController::class, 'showall']);

//fetch specific banana
Route::get('/banana/{id}', [BananaController::class, 'getspecificbanana']);

//update specific banana
Route::put('/updatebanana/{id}', [BananaController::class, 'updatebanana']);

//delete specific banana
Route::delete('/deletebanana/{id}', [BananaController::class, 'deletebanana']);


Route::get('/search/{color}', [BananaController::class, 'searchbycolor']);


