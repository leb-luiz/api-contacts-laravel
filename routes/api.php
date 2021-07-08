<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacts', [\App\Http\Controllers\ContactsController::class, 'all']);

Route::get('/contact/{id}', [\App\Http\Controllers\ContactsController::class, 'one']);

Route::post('/contact', [\App\Http\Controllers\ContactsController::class, 'insert']);

Route::put('/contact/{id}', [\App\Http\Controllers\ContactsController::class, 'edit']);

Route::delete('/contact/{id}', [\App\Http\Controllers\ContactsController::class, 'delete']);
