<?php

use App\Http\Controllers\FormEntryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormEntryController::class, 'create']);
