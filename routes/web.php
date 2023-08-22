<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NomeDaController;

Route::get('/books', [NomeDaController::class,'indexTela']);
Route::get('/book/{id}', [NomeDaController::class,'show']);
