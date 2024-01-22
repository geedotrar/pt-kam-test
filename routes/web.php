<?php

use App\Http\Controllers\SiteLocController;
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

Route::get('/', function () {
    return view('welcome');

});


Route::get('/sites', [SiteLocController::class, 'index'])->name('sites.index');
Route::get('/sites/create', [SiteLocController::class, 'create'])->name('sites.create');
Route::post('/sites', [SiteLocController::class, 'store'])->name('sites.store');


Route::get('/sites/{id}/edit', [SiteLocController::class, 'edit'])->name('sites.edit');
Route::put('/sites/{id}', [SiteLocController::class, 'update'])->name('sites.update');


Route::delete('/sites/{id}', [SiteLocController::class, 'destroy'])->name('sites.destroy');



