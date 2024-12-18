<?php

use RayyanPanja\RolePermissionManager\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::name('access.control.')->prefix("/access-control")->group(function () {
    Route::controller(IndexController::class)->group(function () {
        Route::get("/", 'index')->name('index');
    });
});

