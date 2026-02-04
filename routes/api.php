<?php

use App\Http\Controllers\FormEntryController;
use Illuminate\Support\Facades\Route;

Route::post('/form-entries', [FormEntryController::class, 'store']);
Route::get('/form-entries', [FormEntryController::class, 'index']);
