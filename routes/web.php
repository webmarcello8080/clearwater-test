<?php

use App\Livewire\Map;
use Illuminate\Support\Facades\Route;

Route::get('/', Map::class)->name('map');

