<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\CollaborateurController;
use App\Http\Controllers\EntrepriseController;
use App\Models\User;

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
    if(Auth::check()){
        return view('/home');
    }
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Visualisation des entrerprises
Route::get('/entreprise/id', [App\Http\Controllers\EntrepriseController::class,'show'])->name('entreprise');
//Création des entreprises
Route::get('/entreprise/create', [EntrepriseController::class, 'show_create']);
Route::post('/entreprise/create',[EntrepriseController::class,'addData']);
//Update des entrerprises
Route::get('/entreprise/update/{id}', [EntrepriseController::class,'edit']);
Route::post('/entreprise/update', [EntrepriseController::class,'update']); 
//Delete des entrerprises
Route::get('/entreprise/delete/{id}', [EntrepriseController::class,'delete']);
//Recherche des entreprises
Route::post('/entreprise/id',[EntrepriseController::class,'searchCol']);


//visualisation des collaborateurs
Route::get('/collaborateur/id', [App\Http\Controllers\CollaborateurController::class,'show'])->name('collaborateur');
//Création des collaborateurs
Route::get('/collaborateur/create', [CollaborateurController::class, 'show_create']);
Route::post('/collaborateur/create',[CollaborateurController::class,'addData']);
//Update des collaborateurs
Route::get('/collaborateur/update/{id}', [CollaborateurController::class,'edit']);
Route::post('/collaborateur/update', [CollaborateurController::class,'update']); 
//Delete des collaborateurs
Route::get('/collaborateur/delete/{id}', [CollaborateurController::class,'delete']);
//Recherche des Collaborateurs
Route::post('/collaborateur/id',[CollaborateurController::class,'searchCol']);
