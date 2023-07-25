<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;

Route::get("/threads", [ThreadController::class, "index"])->name("threads.list");

Route::get('/', function () {
    return redirect("/threads");
});