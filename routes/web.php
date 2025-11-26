<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CashierController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', fn() => 'Admin Dashboard')->name('admin.dashboard');
});

Route::middleware(['auth', 'role:cashier'])->group(function () {
    Route::get('/cashier', [CashierController::class, 'index'])->name('cashier.dashboard');

    Route::post('/cashier/scan', [CashierController::class, 'scanBarcode']);
    Route::post('/cashier/add', [CashierController::class, 'addItem']);
    Route::post('/cashier/update', [CashierController::class, 'updateQty']);
    Route::post('/cashier/remove', [CashierController::class, 'removeItem']);
});

