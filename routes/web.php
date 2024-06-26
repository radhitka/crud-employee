<?php

use App\Http\Controllers\{AuthController, MainController};
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

Route::get('/', [MainController::class, 'index']);


Route::controller(MainController::class)->group(function () {
    Route::get('home', 'index');
    Route::get('add', 'add');
    Route::get('import', 'import');
    Route::get('edit/{id}', 'edit');
});
