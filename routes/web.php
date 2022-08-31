<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LivreurController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
  
Route::get("pageclient", [ ClientController::class, 'client'])->name("pageclient");
Route::get("pagelivreur", [ LivreurController::class, 'livreur'])->name("pagelivreur");
Route::get("pageadmin", [ AdminController::class, 'admin'])->name("pageadmin");
Route::get("liste_livreur", [ AdminController::class, 'liste_livreur'])->name("liste_livreur");
Route::get("ajouter_livreur", [ AdminController::class, 'ajouter_livreur'])->name("creer_livreur");

Route::get("edit_livreur/{livreur}", [ AdminController::class, 'edit'])->name("edit_livreur");

Route::post("ajouter_livreur", [ AdminController::class, 'store'])->name("ajouter_livreur");

Route::delete("liste_livreur/{livreur}", [ AdminController::class, 'delete'])->name("supprimer_livreur");

Route::put("modifier_livreur/{livreur}", [ AdminController::class, 'modifier'])->name("modifier_livreur");

Route::get("info_livreur/{livreur}", [AdminController::class,"info_livreur"])->name("info_livreur");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/inscription/admin", [AuthController::class, "admin_inscription"])->name("inscription_admin");
Route::post("/inscription/admin", [AuthController::class, "admin_inscription_store"]);

Route::get("/connexion/admin", [AuthController::class, "admin_connexion"])->name("connexion_admin");
Route::post("/connexion/admin", [AuthController::class, "admin_connexion_store"]);

Route::get("/inscription/livreur", [AuthController::class, "livreur_inscription"])->name("inscription_livreur");
Route::post("/inscription/livreur", [AuthController::class, "livreur_inscription_store"]);

Route::get("/connexion/livreur", [AuthController::class, "livreur_connexion"])->name("connexion_livreur");
Route::post("/connexion/livreur", [AuthController::class, "livreur_connexion_store"]);

Route::get("/inscription/client", [AuthController::class, "client_inscription"])->name("inscription_client");

Route::get("/connexion/client", [AuthController::class, "client_connexion"])->name("connexion_client");
Route::post("/connexion/client", [AuthController::class, "client_connexion_store"]);
