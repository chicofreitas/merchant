<?php

use Illuminate\Support\Facades\Route;
use Chicofreitas\Merchant\Http\Controllers\SupplierController;

Route::get('/suppliers', [SupplierController::class, 'index']);