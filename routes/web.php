<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('transaction/import', [TransactionController::class, 'import'])->name('transaction.import');
    Route::post('transaction/load', [TransactionController::class, 'load'])->name('transaction.load');
    Route::resource('company', CompanyController::class);
    Route::resource('transaction', TransactionController::class);
    Route::resource('user', UserController::class);    
});







