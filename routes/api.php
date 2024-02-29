<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::post('auth/token', [AuthController::class, 'token']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('expenses/import', [ExpenseController::class, 'import']);
    Route::put('expenses/{expense}', [ExpenseController::class, 'update']);
});
