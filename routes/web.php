<?php

use App\Http\Controllers\admin\AdminDataController;
use App\Http\Controllers\admin\AdminLoginController;
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
    return view('frontend.main');
});




Route::prefix('Admin')
    ->as('Admin.')
    ->controller(AdminLoginController::class)
    ->group(function () {

        Route::get('Login', 'adminLoginView')->name('Admin');
        Route::post('AdminLogin', 'adminLogin')->name('AdminLogin');

    });

Route::prefix('Admin')
    ->as('Admin.')
    ->middleware('is_admin')
    ->controller(AdminDataController::class)
    ->group(function () {

        Route::get('/Dashboard', 'adminDashboard')->name('Dashboard');

    });
