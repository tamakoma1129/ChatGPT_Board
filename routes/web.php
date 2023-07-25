<?php



Route::get("/threads","ThreadController@index")->name("threads.list");

Route::get('/', function () {
    return redirect("/threads");
});
