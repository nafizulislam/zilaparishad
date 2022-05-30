<?php

use App\Http\Controllers\CostController;
use App\Http\Controllers\IncomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PciController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ThikadarController;
use App\Http\Controllers\VaratiaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Income source api goes here
Route::post('update_income_source_by_id/{id}', [IncomeController::class, 'update']);
Route::get('income_source_details/{id}', [IncomeController::class, 'getDataById']);

// PIC api goes here
Route::post('update_pci_by_id/{id}', [PciController::class, 'update']);
Route::get('pci_details_by_Id/{id}', [PciController::class, 'getDataById']);

// Thikadar api goes here
Route::post('update_thikadar_by_id/{id}', [ThikadarController::class, 'update']);
Route::get('thikadar_details_by_Id/{id}', [ThikadarController::class, 'getDataById']);

// varatia api goes here
Route::post('update_varatia_by_id/{id}', [VaratiaController::class, 'update']);
Route::get('varatia_details/{id}', [VaratiaController::class, 'getDataById']);
Route::get('varatia_details/{id}', [VaratiaController::class, 'details']);

// cost source api goes here
Route::get('cost_source_details/{id}', [CostController::class, 'getDataById']);
Route::post('update_cost_source_by_id/{id}', [CostController::class, 'update']);

// project api goes here
Route::get('project_details_by_Id/{id}', [ProjectController::class, 'getDataById']);
Route::post('update_project_by_id/{id}', [ProjectController::class, 'update']);

