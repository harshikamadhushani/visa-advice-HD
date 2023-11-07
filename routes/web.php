<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EmploymentDocumnetsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FinancialDocumentsController;
use App\Http\Controllers\NonSponsorVisitController;
use App\Http\Controllers\PersonalDocumentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SponsorVisitDocumnetController;
use App\Http\Controllers\UserProfileController;
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

    // User Routes
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

        Route::prefix('/sponsor-visit')->group(function () {
            Route::get('/', [SponsorVisitDocumnetController::class, 'index'])->name('sponsor.visit.documents.index');
            Route::post('/store', [SponsorVisitDocumnetController::class, 'store'])->name('sponsor.visit.documents.store');
            Route::put('/update/{id}', [SponsorVisitDocumnetController::class, 'update'])->name('sponsor.visit.documents.update');
        });

        Route::prefix('/non-sponsor-visit-doc')->group(function () {
            Route::get('/', [NonSponsorVisitController::class, 'index'])->name('non.sponsor.visit.documents.index');
            Route::post('/store', [NonSponsorVisitController::class, 'store'])->name('non.sponsor.visit.documents.store');
            Route::put('/update/{id}', [NonSponsorVisitController::class, 'update'])->name('non.sponsor.visit.documents.update');
        });

        Route::prefix('/profile')->group(function () {
            Route::get('/', [UserProfileController::class, 'index'])->name('user.profile');
            Route::put('/update{id}', [UserProfileController::class, 'update'])->name('user.profile.update');

        });
    });

    // Admin Routes
    Route::middleware('role:admin')->prefix('/admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

        Route::get('/personal-documents-download/{id}', [UserProfileController::class, 'downloadPersonalDoc'])->name('admin.personal.download'); // DEV

        Route::prefix('/download')->group(function () {
            Route::get('/personal-documents/{id}', [DownloadController::class, 'downloadPersonalDocuments'])->name('download.personal.documents');
            Route::get('/financial-document/{id}', [DownloadController::class, 'downloadFinancialDocuments'])->name('download.financial.documents');
            
        });

    });
    Route::prefix('/user')->group(function () {
        Route::get('/get-all-user', [AdminController::class, 'allUsers'])->name('allUsers');
        Route::get('/get-user{id}', [AdminController::class, 'getUser'])->name('getUser');
        Route::get('/get-admin-details', [AdminController::class, 'getAdminDetails'])->name('getAdminDetails');
    });




});

require __DIR__ . '/auth.php';
