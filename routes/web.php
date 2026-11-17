<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hotelC;

Route::get('/', [hotelC::class, 'index']); // user1

Route::get('/client', [hotelC::class, 'clientSaisir'])->name('client'); // user2
Route::post('/client', [hotelC::class, 'clientCreer']); // user2
