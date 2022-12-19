<?php

use Illuminate\Support\Facades\Route;

Route::put('/admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.profile.update');
Route::delete('/admin/users/{user}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

Route::middleware(['role:ADMIN', 'auth'])->group(function(){
    Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
});

Route::middleware(['can:view,user'])->group(function(){
    Route::get('/admin/users/{user}/profile', [App\Http\Controllers\UserController::class, 'show'])->name('user.profile.show');
});