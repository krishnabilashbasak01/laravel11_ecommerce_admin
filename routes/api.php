<?php

use App\Http\Controllers\UserTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post("/user-types", [UserTypeController::class, "store"]);
Route::get("/user-types", [UserTypeController::class, "index"]);
Route::get("/users-by-type/{name}", [
    UserTypeController::class,
    "findAdminByUserType",
]);
Route::delete("/user-types/{id}", [UserTypeController::class, "destroy"]);
Route::delete("/user-types/{id}/permanent", [
    UserTypeController::class,
    "permanentDestroy",
]);

Route::get("/user-types/soft-deleted", [
    UserTypeController::class,
    "getSoftDeletedUserTypes",
]);
// I have to work on to restore softdeleted user type

// Route::get('/test', function (Request $request) {
//     return response()->json('hello');
// });
