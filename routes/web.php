<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;

Route::get("/threads", [ThreadController::class, "index"])->name("threads.list");
Route::get("/thread/create", [ThreadController::class, "create"])->name("threads.create");
Route::get("/thread/{id}",[ThreadController::class, "show"])->name("threads.detail");

Route::get('/', function () {
    return redirect("/threads");
});