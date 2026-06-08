<?php

use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mentions-legales', [LegalController::class, 'mentionsLegales'])->name('legal.mentions');
Route::get('/politique-de-confidentialite', [LegalController::class, 'politiqueConfidentialite'])->name('legal.confidentialite');
