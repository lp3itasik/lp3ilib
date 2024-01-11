<?php


use App\Http\Controllers\Backend\DesideratasController;
use App\Http\Controllers\Backend\RepositoriesController;
use App\Http\Controllers\Backend\TypeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApproverepoController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\BerandaadminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarapproverepoController;
use App\Http\Controllers\DesiderataController;
use App\Http\Controllers\InputrepoController;
use App\Http\Controllers\PedomanController;
use App\Http\Controllers\PustakawanController;
use App\Http\Controllers\RepositoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ViewrepoController;
use App\Http\Controllers\VisimisiController;

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

Route::get('/inputrepo', [InputrepoController::class,'index'])->name('inputrepo.index');

Route::get('/approverepo', [ApproverepoController::class,'index'])->name('approverepo.index');

Route::get('/arsip', [ArsipController::class,'index'])->name('arsip.index');

Route::get('/daftarapproverepo', [DaftarapproverepoController::class,'index'])->name('daftarapproverepo.index');

Route::get('/pedoman', [PedomanController::class,'index'])->name('pedoman.index');

Route::get('/berandaadmin', [BerandaadminController::class,'index'])->name('berandaadmin.index');

Route::get('/desiderata', [DesiderataController::class,'index'])->name('desiderata.index');

Route::get('/repository', [RepositoryController::class,'index'])->name('repository.index');

Route::get('/visimisi', [VisimisiController::class,'index'])->name('visimisi.index');

Route::get('/pustakawan', [PustakawanController::class,'index'])->name('pustakawan.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/types', TypeController::class)->middleware(['auth']);
Route::resource('/repositories', RepositoriesController::class)->middleware(['auth']);
Route::resource('/desideratas', DesideratasController::class)->middleware(['auth']);

require __DIR__.'/auth.php';