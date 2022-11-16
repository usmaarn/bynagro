<?php


use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {
    Route::view("login", "auth.login")->name("login");
});