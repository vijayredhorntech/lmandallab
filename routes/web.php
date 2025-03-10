<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/research', [PagesController::class, 'research'])->name('research');
Route::get('/publications', [PagesController::class, 'publications'])->name('publications');
Route::get('/onlineResources', [PagesController::class, 'onlineResources'])->name('onlineResources');
Route::get('/members', [PagesController::class, 'members'])->name('members');
Route::get('/photos', [PagesController::class, 'photos'])->name('photos');
Route::get('/collaborator', [PagesController::class, 'collaborator'])->name('collaborator');
Route::get('/test', [PagesController::class, 'test'])->name('test');

