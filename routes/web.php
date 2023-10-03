<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/etudiant', [etudiantcontroller::class, 'liste_etudiant']);


Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'deleteEtudiant']);

Route::get('/update-etudiant/{id}', [EtudiantController::class, 'updateEtudiant']);
Route::get('/etudiant', [EtudiantController::class, 'listeEtudiant']);

Route::get('/ajouter', [EtudiantController::class, 'ajouterEtudiant']);


Route::post('/update/traitement', [EtudiantController::class, 'updateEtudiantTraitement']);


Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouterEtudiantTraitement']);
