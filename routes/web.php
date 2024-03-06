<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController; 

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

Route::get('/', [CrudController::class, "index" ]) -> name("crud.index");


Route::get('/data', function () {
    return view('vista');
});

Route::get('/product/{id}', [CrudController::class, "delete_producto"])->name('crud.delete_producto');

Route::get('/edit/{id}', [CrudController::class, "edit"]) -> name("crud.edit");
Route::put('/update/{id}', [CrudController::class, "update"]) -> name("crud.update");


Route::post('/store', [CrudController::class, "store"])->name("crud.store");