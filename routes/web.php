<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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
Route::get('/Apprenant',[App\Http\Controllers\ApprenantControler::class,'lister']);
Route::get('/Formation',[App\Http\Controllers\FormationControler::class,'lister']);
Route::get('/AjouterApprenant',[App\Http\Controllers\ApprenantControler::class,'index']);
Route::get('/AjouterFormation',[App\Http\Controllers\FormationControler::class,'index']);
Route::post('/EnregistrerApprenant',[App\Http\Controllers\ApprenantControler::class,'ajouter'])->name('saveA');
Route::post('/EnregistrerFormation',[App\Http\Controllers\FormationControler::class,'ajouter'])->name('saveF');
