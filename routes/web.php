<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', \App\Livewire\Dashboard\Page::class);
    Route::get('expenses', \App\Livewire\Expense\Index\Page::class);
    Route::get('expenses/{expense}/edit', \App\Livewire\Expense\Edit\Page::class);
    Route::get('expenses/import', \App\Livewire\Expense\Import\Page::class);
});
