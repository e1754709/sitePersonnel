<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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


Route::get("/home", [SiteController::class, "home"]);

Route::get("/projects", [SiteController::class, "projects"]);

Route::get("/contact", [SiteController::class, "contact"]);
Route::post("/contact", [SiteController::class, "contactForm"]);

Route::get("/resume", [SiteController::class, "resume"]);
