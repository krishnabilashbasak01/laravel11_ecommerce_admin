<?php

use App\Http\Controllers\UserTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// create user-type
Route::post("/user-types", [UserTypeController::class, "store"]);

// get all user types
Route::get("/user-types", [UserTypeController::class, "index"]);

// get admin users by type name
Route::get("/users-by-type/{name}", [
    UserTypeController::class,
    "findAdminByUserType",
]);

// soft delete usertype by id
Route::delete("/user-types/{id}", [UserTypeController::class, "destroy"]);

// permanent delete usertyoe by id
Route::delete("/user-types/{id}/permanent", [
    UserTypeController::class,
    "permanentDestroy",
]);

// get soft-deleted users
Route::get("/user-types/soft-deleted", [
    UserTypeController::class,
    "getSoftDeletedUserTypes",
]);

// I have to work on to restore softdeleted user type
Route::post("/user-types/{id}/restore", [UserTypeController::class, "restore"]);

// Route::get('/test', function (Request $request) {
//     return response()->json('hello');
// });
