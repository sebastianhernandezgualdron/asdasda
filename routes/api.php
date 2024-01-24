<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/categories', [CategoryController::class, "index"])->name("categories.index");

Route::post('/categories', [CategoryController::class, "store"])->name("categories.store");

Route::get('/categories/{id}', [CategoryController::class, "show"])->name("categories.show");
Route::put('/categories/{id}', [CategoryController::class, "update"])->name("categories.update");
Route::delete('/categories/{id}', [CategoryController::class, "destroy"])->name("categories.destroy");
Route::post('/register', [AuthController::class, "register"])->name("Auth.register");
Route::post('/login', [AuthController::class, "login"])->name("Auth.register");


Route::middleware("auth:sanctum")->group(function (){
    Route::resource("categories", CategoryController::class)->names("categories");
    Route::resource("characters", CharacterController::class)->names("characters");
});
