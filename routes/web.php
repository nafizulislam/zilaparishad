<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PciController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SarokController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VaratiaController;
use App\Http\Controllers\ThikadarController;
use App\Http\Controllers\DynamicPDFController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles',App\Http\Controllers\RoleController::class);
    Route::resource('users',App\Http\Controllers\UserController::class);
//    Route::resource('products','ProductController');
});

// pic routes go here
Route::resource('client', PciController::class);
Route::get('client/delete/{id}', [PciController::class, 'delete'])->name('client.delete');
Route::get('pic_details/{id}', [PciController::class, 'details']);


// Thikadar routes go here
Route::resource('thikadar', ThikadarController::class);
Route::get('thikadar_details/{id}', [ThikadarController::class, 'details']);
Route::get('thikadar/delete/{id}', [ThikadarController::class, 'delete'])->name('thikadar.delete');

// Varatia routes go here
Route::resource('varatia', VaratiaController::class);
Route::get('varatia/delete/{id}', [VaratiaController::class, 'delete'])->name('varatia.delete');

// project routes go here
Route::resource('project', ProjectController::class);
Route::get('project_details/{id}', [ProjectController::class, 'details']);
Route::get('project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');
Route::POST('project/import', [ProjectController::class, 'import'])->name('project.import');
Route::POST('/selectedProjects', [ProjectController::class, 'deleteAllSelectedRecords'])->name('project.deleteSelected');
Route::GET('project/deskpass/{id}', [ProjectController::class, 'deskpassAdd'])->name('project.deskpassEdit');
//Route::GET('/basicadd/{id}', [ProjectController::class, 'basicAdd'])->name('project.basicadd');



// Rate routes go here
Route::resource('rate', RateController::class);

// Sarok Routes go here
Route::resource('sarok', SarokController::class);
Route::get('project_details_by_minister_number/{id}', [SarokController::class, 'projectDetails']);
Route::get('sarok/delete/{id}', [SarokController::class, 'delete'])->name('sarok.delete');

// Package routes go here
Route::resource('package', PackageController::class);
Route::get('package/delete/{id}', [PackageController::class, 'delete'])->name('package.delete');


Route::get('/earnlist', function () {
    return view('EarnCost.earnlist');
})->name('earnlist');




Route::resource('income', IncomeController::class);
Route::get('income-source/delete/{id}', [IncomeController::class, 'delete'])->name('income_source_delete');

Route::resource('cost', CostController::class);
Route::get('cost-source/delete/{id}', [CostController::class, 'delete'])->name('cost_source_delete');

Route::get('/project_pdf', 'DynamicPDFController@index');

Route::get('/project_pdf/pdf', 'DynamicPDFController@pdf');