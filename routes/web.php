<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::prefix("/admin")->group(function () {
    // Login
    Route::match(["get", "post"], "/login", [
        AdminController::class,
        "login",
    ])->name("login");

    // Admin
    Route::group(["middleware" => "admin"], function () {
        Route::match(["get", "post"], "/dashboard", [
            AdminController::class,
            "index",
        ])->name("dashboard");
        Route::match(["get", "post"], "/user/all-users", [
            AdminController::class,
            "users",
        ])->name("users");
    });
});
