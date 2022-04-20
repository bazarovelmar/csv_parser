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

//Route::get('/', [App\Http\Controllers\CsvReaderController::class, 'csvReader']);
Route::get('/form', function () {
    return view('uploadForm');
});
Route::get('/table', [\App\Http\Controllers\ViewTableController::class, "table"]);
Route::post('/form/add_file', [App\Http\Controllers\UploadController::class, 'upload']);


