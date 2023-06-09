<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use Illuminate\Notifications\Action;

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
Route::get('/crud', [CrudController::class, 'index'])->name('crud');
Route::get('/crud/{id}', [CrudController::class, 'edit'])->name('edit');
Route::get('/crud/delete/{id}', [CrudController::class, 'delete'])->name('delete');
Route::get('/create', [CrudController::class, 'create'])->name('create');
Route::post('/crud/store', [CrudController::class, 'store'])->name('store');
Route::post('/crud/update', [CrudController::class, 'update'])->name('update');



Route::get('/', function () {
    return view('portfilio.index');
});