<?php

use App\Http\Controllers\EmploymentDocumnetsController;
use App\Http\Controllers\FinancialDocumentsController;
use App\Http\Controllers\PersonalDocumentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return redirect('/login');
});
Route::middleware('auth')->group(function () {
    /*     Route::get('/', function () {
        return view('welcome');
    }); */

    Route::middleware('role:user')->prefix('/user')->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('user.dashboard');

        Route::prefix('/personal-documents')->group(function () {
            Route::get('/', [PersonalDocumentsController::class, 'index'])->name('personal.documents.index');
            Route::post('/store', [PersonalDocumentsController::class, 'store'])->name('personal.documents.store');
            Route::put('/update/{id}', [PersonalDocumentsController::class, 'update'])->name('personal.documents.update');
        });

        Route::prefix('/financial-documents')->group(function () {
            Route::get('/', [FinancialDocumentsController::class, 'index'])->name('financial.documents.index');
            Route::post('/store', [FinancialDocumentsController::class, 'store'])->name('financial.documents.store');
            Route::put('/update/{id}', [FinancialDocumentsController::class, 'update'])->name('financial.documents.update');
        });

        Route::prefix('/employment-documents')->group(function () {
            Route::get('/', [EmploymentDocumnetsController::class, 'index'])->name('employment.documents.index');
            Route::post('/store', [EmploymentDocumnetsController::class, 'store'])->name('employment.documents.store');
            Route::put('/update/{id}', [EmploymentDocumnetsController::class, 'update'])->name('employment.documents.update');
        });
    });

    Route::middleware('role:admin')->prefix('/admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

    });

});

require __DIR__ . '/auth.php';
