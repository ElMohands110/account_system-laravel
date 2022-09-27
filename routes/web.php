<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
$user = new App\Models\Login
$user->name = "STM Accountant"
$user->username = "smarttarget"
$user->password = bcrypt("12345678")
$user->save()
*/

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DeedOfArrestController;
use App\Http\Controllers\ExchangeVoucherRegistrationController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

const PAGINATE_SIZE = 10;

Route::group(['middleware' => 'guest:accountant'], function () {
    Route::get('/login', [AppController::class, 'goLogin'])->name('go.login');
    Route::post('/login', [AppController::class, 'checkLogin'])->name('login');
    Route::get('/register', [AppController::class, 'goRegister'])->name('go.register');
});

Route::group(['middleware' => 'auth:accountant'], function () {
    Route::post('/logout', [AppController::class, 'logout'])->name('logout');
    Route::get('/', [AppController::class, 'index'])->name('dashboard');
    Route::get('/profile', [AppController::class, 'goProfile'])->name('profile');
    Route::post('/profile', [AppController::class, 'updateProfile'])->name('profile.update');

    Route::group(['prefix' => 'accounts'], function () {
        Route::get('/main-accounts', [AccountsController::class, 'mainAccount'])->name('account.main');
        Route::get('/sub-accounts', [AccountsController::class, 'subAccount'])->name('account.sub');
        Route::get('/tree-accounts', [AccountsController::class, 'treeAccount'])->name('account.tree');
        Route::post('/', [AccountsController::class, 'storeAccount'])->name('account.store');
        Route::post('/{id}', [AccountsController::class, 'updateAccount'])->name('account.update');
        Route::post('/destroy/{id}', [AccountsController::class, 'destroyAccount'])->name('account.destroy');
    });

    Route::group(['prefix' => 'deed-of-arrest'], function () {
        Route::get('/', [DeedOfArrestController::class, 'index'])->name('deed_of_arrest.index');
        Route::post('/', [DeedOfArrestController::class, 'storeArrest'])->name('deed_of_arrest.store');
        Route::post('/{id}', [DeedOfArrestController::class, 'updateArrest'])->name('deed_of_arrest.update');
        Route::post('/destroy/{id}', [DeedOfArrestController::class, 'destroyArrest'])->name('deed_of_arrest.destroy');
    });

    Route::group(['prefix' => 'exchange-voucher-registration'], function () {
        Route::get('/', [ExchangeVoucherRegistrationController::class, 'index'])->name('exchange_voucher_registration.index');
        Route::post('/', [ExchangeVoucherRegistrationController::class, 'storeArrest'])->name('exchange_voucher_registration.store');
        Route::post('/{id}', [ExchangeVoucherRegistrationController::class, 'updateArrest'])->name('exchange_voucher_registration.update');
        Route::post('/destroy/{id}', [ExchangeVoucherRegistrationController::class, 'destroyArrest'])->name('exchange_voucher_registration.destroy');
    });

    Route::get('/post', [ReportsController::class, 'getPosts'])->name('reports.posts');
    Route::get('/post/search', [ReportsController::class, 'searchPosts'])->name('reports.post.search');
    Route::get('/report', [ReportsController::class, 'getReports'])->name('reports.index');
    Route::get('/report/search', [ReportsController::class, 'searchReports'])->name('reports.search');
});
