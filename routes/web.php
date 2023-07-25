<?php

use Illuminate\Support\Facades\Route;

Route::get("/threads","ThreadsController@index")->name("threads.list");

Route::get('/', function () {
    return redirect("/threads");
});
