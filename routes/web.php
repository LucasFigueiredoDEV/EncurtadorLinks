<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

Route::get('/', [LinkController::class, 'home'])->name('home');

Route::get('/link',[LinkController::class, 'viewLink'])->name('viewLink');
Route::post('/link', [LinkController::class, 'link'])->name('link');

Route::get('{customize}', [LinkController::class, 'redirectLink'])->name('redirectLink');