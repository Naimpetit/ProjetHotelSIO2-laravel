<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hotelC;
use App\Http\Controllers\clientC;

Route::get('/', [hotelC::class, 'index'])->name('index'); // accueil

Route::get('/hotels', [hotelC::class, 'lsthotels']); // user1

Route::get('/client', [clientC::class, 'clientSaisir'])->name('client'); // user3
Route::post('/client', [clientC::class, 'clientCreer']); // user3

Route::get('/deconnexion', [clientC::class, 'deconnexionExecuter']); // user3

Route::get('/connexion', [clientC::class, 'connexionSaisir'])->name('connexion');// user4
Route::post('/connexion', [clientC::class, 'connexionExecuter']); //user4
