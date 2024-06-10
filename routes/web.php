<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"]);
Route::get('/internal-events', [\App\Http\Controllers\InternalEventsController::class, "index"]);
Route::get("/internal-events/create", [\App\Http\Controllers\InternalEventsController::class, "create"]);
Route::post("/internal-events/add-to-db", [\App\Http\Controllers\InternalEventsController::class, "addToDb"]);
Route::get("/internal-events/edit/{id}", [\App\Http\Controllers\InternalEventsController::class, "edit"]);
Route::post("/internal-events/update/{id}", [\App\Http\Controllers\InternalEventsController::class, "update"]);
Route::get("/internal-events/delete/{id}", [\App\Http\Controllers\InternalEventsController::class, "delete"]);
Route::get("/internal-events/add-attachment/{id}", [\App\Http\Controllers\InternalEventsController::class, "addAttachment"]);
Route::post("/internal-events/add-attachment/{id}", [\App\Http\Controllers\InternalEventsController::class, "addAttachmentToDB"]);
