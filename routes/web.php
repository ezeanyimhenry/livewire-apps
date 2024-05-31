<?php

use App\Livewire\Calculator;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('counter');
Route::get('calculator', Calculator::class)->name('calculator');
Route::get('todo', Todo::class)->name('todo');