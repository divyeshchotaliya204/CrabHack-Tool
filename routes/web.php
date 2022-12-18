<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageUserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
    Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
    Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'registerAction'])->name('register.action');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', [AuthController::class, 'verificationNotice'])->name('verification.notice');
    Route::post('/email/verification-notification', [AuthController::class, 'resendVerificationLink'])->name('verification.send');

    Route::middleware(['signed'])->group(function () {
        Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verficationVerfiy'])->name('verification.verify');
    });

    Route::middleware(['verified'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.view');
        Route::get('/manage-user', [ManageUserController::class, 'manageUserView'])->name('manage-user.view');
        Route::post('/manage-user', [ManageUserController::class, 'manageUserAction'])->name('manage-user.action');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
