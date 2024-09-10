<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('/set-language/{lang}', [LanguageController::class, 'setLanguage']);
Route::get('/get-language', [LanguageController::class, 'getLanguage']);
