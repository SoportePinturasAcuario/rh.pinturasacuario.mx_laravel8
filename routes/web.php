<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RH\BranchsController;
use App\Http\Controllers\RH\CollaboratorsController;
use App\Http\Controllers\RH\EnterprisesController;
use App\Http\Controllers\RH\CentersController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Rautas para colaboradores 
Route::get('/',[CollaboratorsController::class,'index'])->name('/');

Route::get('/collaborator-create',[CollaboratorsController::class,'create'])->name('/collaborator-create');

Route::post('/collaborator-add',[CollaboratorsController::class,'store'])->name('/collaborator-add');

Route::get('/fech',[CollaboratorsController::class,'fechcollaborators'])->name('/fech');

// Rutas para empresas

Route::get('/enterprise_and_centers',[EnterprisesController::class,'index'])->name('/enterprise_and_centers');

Route::post('/addcenters', [CentersController::class,'store'])->name('/addcenters');

Route::get('/fetch-center', [CentersController::class,'fetchCenter'])->name('/fetch-center');

Route::get('/edit-center/{id}', [CentersController::class,'edit'])->name('/edit-center/{id}');

Route::put('/update-center/{id}', [CentersController::class,'update'])->name('/update-center/{id}');

Route::delete('/delete-center/{id}', [CentersController::class,'destroy'])->name('/delete-center/{id}');