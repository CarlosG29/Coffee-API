<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CropController;
use App\Http\Controllers\Api\ResourceController;
use App\Http\Controllers\Api\PestController;
use App\Http\Controllers\Api\QualityController;
use App\Http\Controllers\Api\ProductionController;
use App\Http\Controllers\Api\TraceabilityController;

// Definición de rutas para la API
Route::apiResource('crops', CropController::class);
Route::apiResource('resources', ResourceController::class);
Route::apiResource('pests', PestController::class);
Route::apiResource('quality', QualityController::class);
Route::apiResource('production', ProductionController::class);
Route::apiResource('traceability', TraceabilityController::class);
