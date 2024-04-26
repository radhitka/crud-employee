<?php

use App\Http\Controllers\API\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('employee')->controller(EmployeeController::class)->group(function () {

    Route::get('', 'list');
    Route::get('/detail/{id}', 'detail');
    Route::post('', 'add');
    Route::post('/update/{id}', 'update');
    Route::delete('/{id}', 'delete');

    Route::prefix('export')->group(function () {
        Route::get('csv', 'exportCsv');
    });
});
