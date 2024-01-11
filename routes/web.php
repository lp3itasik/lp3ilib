<?php

use App\Http\Controllers\Backend\DesideratasController;
use App\Http\Controllers\Backend\RepositoriesController;
use App\Http\Controllers\Backend\TypeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/types', TypeController::class)->middleware(['auth']);
Route::resource('/repositories', RepositoriesController::class)->middleware(['auth']);
Route::resource('/desideratas', DesideratasController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
