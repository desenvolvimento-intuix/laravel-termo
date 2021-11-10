<?php

use Illuminate\Support\Facades\Route;
use Intuix\Termo\Controllers\TermoController;

Route::middleware('web')->group(function () {
    Route::resource('termos', TermoController::class);
    Route::get('termo/{cliente_id}/{slug}', [TermoController::class, 'termo'])->name('termo');
    Route::get('termo/{cliente_id}/{slug}/qrcode', [TermoController::class, 'qrcode'])->name('termo.qrcode');
    Route::post('termo/assinar', [TermoController::class, 'assinarTermo'])->name('termo.assinar');
});