<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get("/services", [PageController::class, "services"])->name("services");
Route::get("/products", [PageController::class, "products"])->name("products");
Route::get("/blogs", [PageController::class, "blogs"])->name("blogs");
Route::get("/about", [PageController::class, "about"])->name("about");
Route::get("/contact", [PageController::class, "contact"])->name("contact");
// Route::get("/contact", [PageController::class, "contact"])->name("contact");
// Route::get("/contact", [PageController::class, "contact"])->name("contact");