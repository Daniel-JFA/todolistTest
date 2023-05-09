<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoListController::class, 'index'])->name('index');
Route::post('/', [TodoListController::class, 'store'])->name('store');
/* Route::post('/todoLists', 'TodoListController@store')->name('todoLists.store'); */
Route::delete('/{todolist:id}', [TodoListController::class, 'destroy'])->name('destroy');

