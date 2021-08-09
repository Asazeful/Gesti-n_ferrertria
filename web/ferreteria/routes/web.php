<?php

use Illuminate\Support\Facades\Route;

Route::view("/","home")->name("home");
Route::view("/añadir_materiales","añadir_materiales")->name("añadir_materiales");
Route::view("/añadir_herramientas","añadir_herramientas")->name("añadir_herramientas");
Route::view("/compras","compras")->name("compras");
Route::view("/login","login")->name("login");