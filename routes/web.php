<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BankReconController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\ParticularController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;

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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['AuthCheck']], function(){
    Route::get('/', [LoginController::class, 'index'])->name('/');
    Route::post('/login_user', [LoginController::class, 'login']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/bankrecon', [BankReconController::class, 'index']);
    Route::get('/bankrecon_encashments', [BankReconController::class, 'encashments']);
    Route::get('get_allYears', [YearController::class, 'get_all']);
    Route::get('get_allFunds', [FundController::class, 'get_all']);
    Route::get('get_allParticulars', [ParticularController::class, 'get_all']);
    Route::post('bankrecon_action', [BankReconController::class, 'store']);
    Route::post('get_allCashbooks', [BankReconController::class, 'get_allCashbooks']);
    Route::get('get_allSuppliers', [SupplierController::class, 'get_all']);
    Route::post('encash_check', [BankReconController::class, 'encash_check']);
    Route::get('get_cashbookdata/{id}', [BankReconController::class, 'get_cashbookdata']);
    Route::get('/funds', [FundController::class, 'index']);
    Route::get('get_allFunds', [FundController::class, 'get_all']);
    Route::get('get_allbankaccount_numbers', [FundController::class, 'get_allbankaccount_numbers']);
    Route::get('get_bankaccount_info/{id}', [FundController::class, 'get_bankaccount_info']);
    Route::post('funds_action', [FundController::class, 'actions']);
    Route::get('get_fundinfo/{id}', [FundController::class, 'get_fundinfo']);
    Route::get('delete_fund/{id1}', [FundController::class, 'delete']);
    Route::get('/outstandingchecks', [BankReconController::class, 'outstanding_checks']);
    Route::post('get_allOutstandingChecks', [BankReconController::class, 'get_allOutstandingChecks']);
    Route::get('invoice', [DashboardController::class, 'invoice']);
    Route::get('get_allbankaccount', [FundController::class, 'get_allbankaccount']);

    //users
    Route::get('/users', [UserController::class, 'index']);
    Route::get('get_allDesignations', [UserController::class, 'get_allDesignations']);
    Route::get('get_allusers', [UserController::class, 'get_allusers']);
    Route::post('add_user', [UserController::class, 'store']);
    Route::get('get_allOffices', [UserController::class, 'get_allOffices']);
    Route::get('get_userinfo/{id}', [UserController::class, 'get_userinfo']);
    Route::get('/logout', [UserController::class, 'logout']);

    Route::post('save_designated_officer', [DashboardController::class, 'store']);
    Route::get('get_designated_officerinfo', [DashboardController::class, 'get_designated_officerinfo']);

    Route::get('get_allResponsibilityCenters', [BankReconController::class, 'get_allResponsibilityCenters']);

    Route::get('get_allAccounts', [BankReconController::class, 'get_allAccounts']);
});