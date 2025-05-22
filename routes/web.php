<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateController;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get("/About", [DateController::class, "about"])->name('about');
Route::get("/Contact", function () {
    return view('Contact');
})->name('contact');
Route::get("Projects", function () {
    return view('Projects');
})->name('projects');

require __DIR__.'/auth.php';
