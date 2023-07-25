<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get("/threads","ThreadController@index")->name("threads.list");

Route::get('/', function () {
    return redirect("/threads");
});
