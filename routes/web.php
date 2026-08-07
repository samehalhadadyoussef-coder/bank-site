<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\AtmController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


/*
|--------------------------------------------------------------------------
| الصفحة الرئيسية
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index_manager'])
    ->name('index_manager');


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');


/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| Customers
|--------------------------------------------------------------------------
*/

Route::get('/Customers', [CustomerController::class, 'index'])
    ->name('Customers');

Route::get('/Customer_create', [CustomerController::class, 'Customer_create'])
    ->name('Customer_create');

Route::post('/Customer_store', [CustomerController::class, 'Customer_store'])
    ->name('Customer_store');

Route::get('/customers/{id}', [CustomerController::class, 'view'])
    ->name('customers.view');

Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])
    ->name('customers.edit');

Route::put('/customers/{id}', [CustomerController::class, 'update'])
    ->name('customers.update');

Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])
    ->name('delete');


/*
|--------------------------------------------------------------------------
| Accounts
|--------------------------------------------------------------------------
*/

Route::get('/Accounts', [AccountController::class, 'Accounts'])
    ->name('Accounts');

Route::get('/Accounts/{id}', [AccountController::class, 'view'])
    ->name('Accounts.view');

Route::get('/Account_create', [AccountController::class, 'Account_create'])
    ->name('Account_create');

Route::post('/Account_store', [AccountController::class, 'Account_store'])
    ->name('Account_store');

Route::get('/Accounts/{id}/edit', [AccountController::class, 'edit'])
    ->name('Account_edit');

Route::put('/Accounts/{id}', [AccountController::class, 'update'])
    ->name('Account_update');

Route::delete('/Accounts/{id}', [AccountController::class, 'destroy'])
    ->name('Account_destroy');


/*
|--------------------------------------------------------------------------
| Managers
|--------------------------------------------------------------------------
*/

Route::get('/Managers', [ManagerController::class, 'index'])
    ->name('Managers');

Route::get('/Managers/create', [ManagerController::class, 'create'])
    ->name('Managers.create');

Route::post('/Managers', [ManagerController::class, 'store'])
    ->name('Managers.store');


/*
|--------------------------------------------------------------------------
| Transactions
|--------------------------------------------------------------------------
*/

Route::get('/Transactions', [TransactionController::class, 'index'])
    ->name('Transactions');

Route::get('/transactions/create', [TransactionController::class, 'create'])
    ->name('transaction.create');

Route::post('/transactions', [TransactionController::class, 'store'])
    ->name('transaction.store');

Route::get('/transactions/{id}', [TransactionController::class, 'view'])
    ->name('transaction.view');

Route::get('/transactions/{transaction}/edit', [TransactionController::class, 'edit'])
    ->name('transaction.edit');

Route::put('/transactions/{transaction}', [TransactionController::class, 'update'])
    ->name('transaction.update');

Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy'])
    ->name('transaction.destroy');


/*
|--------------------------------------------------------------------------
| Loans
|--------------------------------------------------------------------------
*/

Route::get('/loans', [LoanController::class, 'index'])
    ->name('Loans');

Route::get('/loans/create', [LoanController::class, 'create'])
    ->name('loan.create');

Route::post('/loans', [LoanController::class, 'store'])
    ->name('loan.store');

Route::get('/loans/{id}', [LoanController::class, 'view'])
    ->name('loans.view');


/*
|--------------------------------------------------------------------------
| ATM
|--------------------------------------------------------------------------
*/

Route::get('/atm', [AtmController::class, 'index'])
    ->name('ATM');

Route::post('/atm/store', [AtmController::class, 'store'])
    ->name('atm.store');

Route::put('/atm/update/{id}', [AtmController::class, 'update'])
    ->name('atm.update');

Route::delete('/atm/delete/{id}', [AtmController::class, 'destroy'])
    ->name('atm.delete');


/*
|--------------------------------------------------------------------------
| Employees
|--------------------------------------------------------------------------
*/

Route::get('/Employees', [HomeController::class, 'Employees'])
    ->name('Employees');


/*
|--------------------------------------------------------------------------
| Accounting
|--------------------------------------------------------------------------
*/

Route::get('/accounting', [AccountingController::class, 'index'])
    ->name('accounting');


/*
|--------------------------------------------------------------------------
| Reports
|--------------------------------------------------------------------------
*/

Route::get('/reports', [ReportsController::class, 'index'])
    ->name('reports');

Route::post('/reports', [ReportsController::class, 'store'])
    ->name('reports.store');


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/

Route::get('/settings', [SettingController::class, 'index'])
    ->name('settings');

Route::post('/settings/update', [SettingController::class, 'update'])
    ->name('settings.update');


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';

Auth::routes();

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');