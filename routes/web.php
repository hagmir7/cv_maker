<?php

use Illuminate\Support\Facades\Route;

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
    return view('index'); 
});

Route::get('/create', function(){
    return view('create');
})->name('create');

<<<<<<< HEAD
Route::post('/create/person',[\App\Http\Controllers\PersonneController::class,'store'])->name('create-person');
Route::post('/create/competence',[\App\Http\Controllers\CompetencesController::class,'store'])->name('create-competence');
Route::post('/create/diplome',[\App\Http\Controllers\DiplomesController::class,'store'])->name('create-diplome');
Route::post('/create/experience',[\App\Http\Controllers\ExperiencesController::class,'store'])->name('create-experience');
Route::post('/create/langue',[\App\Http\Controllers\LanguesController::class,'store'])->name('create-langue');
Route::post('/create/loisir',[\App\Http\Controllers\LoisirsController::class,'store'])->name('create-loisir');
Route::post('/create/qualite',[\App\Http\Controllers\QualitesController::class,'store'])->name('create-qualite');
=======

Route::get('/cv', function(){
    return view('cv');
})->name('cv');
>>>>>>> d125d4eaf1583fbe75d35da44b149712e0e9742b

