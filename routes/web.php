<?php

use App\Livewire\Calculator;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('counter');
Route::get('calculator', Calculator::class)->name('calculator');