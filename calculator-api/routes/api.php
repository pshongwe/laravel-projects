<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

echo "enter routes";
Route::get('/add', [CalculatorController::class, 'add']);
Route::get('/subtract', [CalculatorController::class, 'subtract']);
Route::get('/multiply', [CalculatorController::class, 'multiply']);
Route::get('/divide', [CalculatorController::class, 'divide']);
