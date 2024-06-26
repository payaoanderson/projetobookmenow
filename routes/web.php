<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, "home"])->name("site.home");
Route::get("/sobre-nos", [SiteController::class, "sobreNos"])->name("site.sobreNos");
Route::get("/contato", [SiteController::class, "contato"])->name("site.contato");

Route::get('/admin/usuarios',[UsuarioController::class, "index"])->name("usuarios.index");
Route::get('/admin/usuarios/cadastrar',[UsuarioController::class, "create"])->name("usuarios.create");
Route::get('/admin/usuarios/editar/{id}',[UsuarioController::class, "edit"])->name("usuarios.edit");
Route::get('/admin/usuarios/visualizar{id}',[UsuarioController::class, "show"])->name("usuarios.show");
Route::post('/admin/usuarios/cadastrar/salvar',[UsuarioController::class, "store"])->name("usuarios.store");






Route::get('/admin/dashboard', [DashboardController::class, "dashboard"])->name("dashboard");









































































// Route::get("/admin/usuarios", [UsuarioController::class, "index"]);



