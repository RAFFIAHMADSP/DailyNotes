<?php

use App\Http\Controllers\DailyNotesController;
use Illuminate\Support\Facades\Route;

Route::get('#', function () {
    return view('welcome');
});

Route::get('/', [DailyNotesController::class,'index'])->name('dashboard');
Route::get('/daily-notes', [DailyNotesController::class,'show'])->name('daily-notes.index');
Route::get('/daily-notes/create', [DailyNotesController::class,'create'])->name('daily-notes.create');
Route::post('/daily-notes', [DailyNotesController::class,'store'])->name('daily-notes.store');
Route::get('/daily-notes/{id}/edit', [DailyNotesController::class,'edit'])->name('daily-notes.edit');
Route::put('/daily-notes/{id}/update', [DailyNotesController::class,'update'])->name('daily-notes.update');
Route::get('/daily-notes/{id}/delete', [DailyNotesController::class,'delete'])->name('daily-notes.delete');
