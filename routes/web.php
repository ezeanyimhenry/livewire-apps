<?php

use App\Livewire\Calculator;
use App\Livewire\CascadingDropdown;
use App\Livewire\Counter;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', Counter::class)->name('counter');
Route::get('calculator', Calculator::class)->name('calculator');
Route::get('todo', Todo::class)->name('todo');
Route::get('cascading-dropdown', CascadingDropdown::class)->name('cascadingDropdown');