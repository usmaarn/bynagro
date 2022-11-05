<?php

use App\Http\Controllers\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [PageController::class, 'index'])->name('home');

require __DIR__.'/auth.php';