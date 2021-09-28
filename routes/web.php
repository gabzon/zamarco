<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('/test', function () {
    // return Http::get('https://s3.amazonaws.com/dolartoday/data.json');
    // $today = Carbon::now();
    
    // $query = Transaction::whereYear('date','2021')->whereMonth('date','02')->sum('amount');
    // $query = Transaction::groupBy('currency')->get();

    $query = DB::table('transactions')->select(
        DB::raw('YEAR(date) AS year'),
        DB::raw('MONTH(date) AS month'),
        DB::raw('(CASE WHEN type = "in" THEN SUM(amount) END) AS total_in'),
    DB::raw('type')        
    )->groupBy('date')->groupBy('type')->where('currency','eur')->get();

    $query2 = DB::table('transactions')->select(
        DB::raw('YEAR(date) AS year'),
        DB::raw('MONTH(date) AS month'),
        DB::raw('SUM(amount) AS total_out'),
    )->groupBy('date')->where('currency','eur')->where('type','out')->get();

    $q = $query->merge($query2);
    
    dd($query);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {    
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('transaction/import', [TransactionController::class, 'import'])->name('transaction.import');
    Route::post('transaction/load', [TransactionController::class, 'load'])->name('transaction.load');
    Route::get('transaction/export/', [TransactionController::class,'export'])->name('transaction.export');
    Route::resource('company', CompanyController::class);
    Route::resource('transaction', TransactionController::class);
    Route::resource('user', UserController::class);    
});







