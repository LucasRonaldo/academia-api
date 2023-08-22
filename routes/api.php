<?php

use App\Http\Controllers\fornecedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('fornecedor', [fornecedorController::class, 'fornecedor']);
