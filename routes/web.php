<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ViewrepoController;
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

Route::get('/', [BerandaController::class,'index'])->name('welcome.index');

Route::get('/service', [ServiceController::class,'index'])->name('service.index');

Route::get('/about', [AboutController::class,'index'])->name('about.index');

Route::get('/searchrepo', [SearchController::class,'index'])->name('search.index');

Route::get('/viewrepo', [ViewrepoController::class,'index'])->name('viewrepo.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
