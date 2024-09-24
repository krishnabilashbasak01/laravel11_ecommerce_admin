<?php

use App\Http\Controllers\UserTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/user-types', [UserTypeController::class, 'store']);
Route::get('/user-types', [UserTypeController::class, 'index']);
Route::get('/user-type/{name}', [UserTypeController::class, 'findAdminByUserType']);

// Route::get('/test', function (Request $request) {
//     return response()->json('hello');
// });
