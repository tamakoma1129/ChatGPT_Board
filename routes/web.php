<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;

Route::get("/threads", [ThreadController::class, "index"])->name("threads.list");
Route::get("/thread/create", [ThreadController::class, "create"])->name("threads.create");
Route::post("/thread/store", [ThreadController::class, "store"])->name("threads.store");
Route::get("/thread/{id}",[ThreadController::class, "show"])->name("threads.detail");

Route::post("/message/store", [MessageController::class, "store"])->name("messages.store");

Route::get('/', function () {
    return redirect("/threads");
});