<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrashedNoteController;

//add this one
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Added Codes

Route::resource('/notes', NoteController::class)->middleware(['auth']);

Route::get('/trashed', [TrashedNoteController::class, 'index'])->middleware('auth')->name('trashed.index');

require __DIR__.'/auth.php';
