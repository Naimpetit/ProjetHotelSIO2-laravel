<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hotelC;

Route::get('/', [hotelC::class, 'index']);
Route::get('/rechercher', [hotelC::class, 'rechercher']);
