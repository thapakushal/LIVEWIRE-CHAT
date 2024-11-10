<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
// use App\Livewire\Chat\Index;
use App\Livewire\Chat\Index;
use App\Livewire\Chat\Chat;


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

require __DIR__.'/auth.php';


Route::get('/counter', Counter::class);

// Route::get('/chat', Index::class)->name('chat.index');
Route::middleware(['auth'])->group(function () {
    Route::get('/chat', App\Livewire\Chat\Index::class)->name('chat.index');
});




Route::get('/chat/{query}', Chat::class)->name('chat');
