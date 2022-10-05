<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
@@ -13,6 +14,8 @@
|
*/

Route::get('home', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});