<?php

use App\Http\Controllers\API\DesideratasController;
use App\Http\Controllers\API\RepoController;
use App\Http\Controllers\API\ServiceAPIController;
use App\Http\Controllers\API\TypesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', [TypesController::class, 'get_all'])->name('types.get');
Route::get('/repositories', [RepoController::class, 'get_all'])->name('repositories.get');
Route::get('/desideratas', [DesideratasController::class, 'get_all'])->name('desideratas.get');
Route::get('/services', [ServiceAPIController::class, 'get_all'])->name('desideratas.get');