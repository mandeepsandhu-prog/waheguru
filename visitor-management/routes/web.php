<?php
use App\Http\Controllers\VisitorController;

Route::get('/', [VisitorController::class, 'index'])->name('visitors.index'); // List visitors
Route::get('/create', [VisitorController::class, 'create'])->name('visitors.create'); // Show form to add a new visitor
Route::post('/store', [VisitorController::class, 'store'])->name('visitors.store'); // Store new visitor in the database
Route::get('/edit/{id}', [VisitorController::class, 'edit'])->name('visitors.edit'); // Show form to edit a visitor
Route::post('/update/{id}', [VisitorController::class, 'update'])->name('visitors.update'); // Update visitor's details in the database
Route::delete('/delete/{id}', [VisitorController::class, 'destroy'])->name('visitors.destroy'); // Delete a visitor
Route::get('/export-excel', [VisitorController::class, 'exportExcel'])->name('visitors.exportExcel'); // Export visitors list to Excel
Route::get('/export-pdf', [VisitorController::class, 'exportPdf'])->name('visitors.exportPdf'); // Export visitors list to PDF
