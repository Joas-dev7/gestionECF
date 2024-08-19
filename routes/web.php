<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Showing all tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/{task}', [TaskController::class, 'show'])->name('task.show');

//Creation, Update, Deleting routes for tasks, user has to be connectedw to use them
Route::middleware('auth')->group(function () {
    Route::get('/create', [TaskController::class, 'create'])->name('task.create');
    Route::get('/store', [TaskController::class, 'store'])->name('task.store');
    Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
    Route::get('/update/{task}', [TaskController::class, 'update'])->name('task.update');
    Route::get('/destroy/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
});

require __DIR__.'/auth.php';
