<?php

use App\Http\Controllers\BancosController;
use Illuminate\Support\Facades\Route;

route::prefix('banco')->group(function () {
    Route::get("/", [BancosController::class,"index"])->name("banco.index");
    Route::get("/create", [BancosController::class,"create"])->name("banco.create");
    Route::post("/", [BancosController::class,"store"])->name("banco.store");
    Route::get("/{id}/edit", [BancosController::class,"edit"])->where('id', '[0-9]+')->name("banco.edit");
    Route::put("/{id}", [BancosController::class,"update"])->where('id', '[0-9]+')->name("banco.update");
    Route::delete("/{id}", [BancosController::class,"destroy"])->where('id', '[0-9]+')->name("banco.destroy");


});
