<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RH\BranchsController;
use App\Http\Controllers\RH\CollaboratorsController;

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

// Rutas para sucursales
Route::get('/branch', [BranchsController::class,'index'])->name('/branch');

Route::post('/addbranchs', [BranchsController::class,'store'])->name('/addbranchs');

Route::get('/fetch-branch', [BranchsController::class,'fetchbranch'])->name('/fetch-branch');

Route::get('/edit-branchs/{id}', [BranchsController::class,'edit'])->name('/edit-branchs/{id}');

Route::put('/update-branch/{id}', [BranchsController::class,'update'])->name('/update-branch/{id}');

Route::delete('/delete-branch/{id}', [BranchsController::class,'destroy'])->name('/delete-branch/{id}');

// Rautas para colaboradores 
Route::get('/',[CollaboratorsController::class,'index'])->name('/collaborator');

Route::get('/collaborator-create',[CollaboratorsController::class,'create'])->name('/collaborator-create');

Route::post('/collaborator-add',[CollaboratorsController::class,'store'])->name('/collaborator-add');

Route::get('/fech',[CollaboratorsController::class,'fechcollaborators'])->name('/fech');