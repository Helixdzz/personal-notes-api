<?php

use App\Http\Controllers\NoteWebController;

Route::prefix('notes-web')->name('notes.web.')->group(function () {
    Route::get('/', [NoteWebController::class, 'index'])->name('index');
    Route::get('/create', [NoteWebController::class, 'create'])->name('create');
    Route::post('/', [NoteWebController::class, 'store'])->name('store');
    Route::get('/{note}/edit', [NoteWebController::class, 'edit'])->name('edit');
    Route::put('/{note}', [NoteWebController::class, 'update'])->name('update');
    Route::delete('/{note}', [NoteWebController::class, 'destroy'])->name('destroy');
});

