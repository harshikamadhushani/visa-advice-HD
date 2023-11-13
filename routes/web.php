<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EmploymentDocumnetsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FinancialDocumentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NonSponsorVisitController;
use App\Http\Controllers\PersonalDocumentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SponsorVisitDocumnetController;
use App\Http\Controllers\UserDashboard;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

/* Route::get('/', function () {
    return redirect('/login');
}); */
Route::middleware('auth')->group(function () {
    /*     Route::get('/', function () {
        return view('welcome');
    }); */

    // User Routes
    Route::middleware('role:user')->prefix('/user')->group(function () {

        Route::get('/dashboard', [UserDashboard::class,'index'])->name('user.dashboard');

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
            Route::post('/remove-profile-pic', [UserProfileController::class, 'removeProfilePic'])->name('removeProfilePic');
            Route::post('/save-country{id}', [UserProfileController::class, 'saveCountry'])->name('saveCountry');
            Route::get('/setting', [UserProfileController::class, 'userSetting'])->name('userSetting');
            Route::post('/reset-password', [UserProfileController::class, 'resetPassword'])->name('resetPassword');


        });
    });

    // Admin Routes
    Route::middleware('role:admin')->prefix('/admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

        // Downloaded routes
        Route::prefix('/download')->group(function () {
            Route::get('/personal-documents/{id}', [DownloadController::class, 'downloadPersonalDocuments'])->name('download.personal.documents');
            Route::get('/financial-document/{id}', [DownloadController::class, 'downloadFinancialDocuments'])->name('download.financial.documents');
            Route::get('/employment-document/{id}', [DownloadController::class, 'downloadEmploymentDocuments'])->name('download.employment.documents');
            Route::get('/sponsor-document/{id}', [DownloadController::class, 'downloadSponsorDocuments'])->name('download.sponsor.documents');
            Route::get('/non-sponsor-document/{id}', [DownloadController::class, 'downloadNonSponsorDocuments'])->name('download.non.sponsor.documents');
            Route::get('/all-document/{id}', [DownloadController::class, 'downloadAllDocuments'])->name('download.all.documents');
        });

        Route::prefix('/user')->group(function () {
            Route::get('/get-all-user', [AdminController::class, 'allUsers'])->name('allUsers');
            Route::get('/get-user{id}', [AdminController::class, 'getUser'])->name('getUser');
            Route::get('/get-admin-details', [AdminController::class, 'getAdminDetails'])->name('getAdminDetails');

            Route::get('/personal{id}', [PersonalDocumentsController::class, 'checkPersonalDoc'])->name('checkPersonalDoc');
            Route::Post('/updateStatus/{id}', [PersonalDocumentsController::class, 'updateStatus'])->name('updateStatus');

            Route::get('/financial{id}', [FinancialDocumentsController::class, 'checkFinancialDoc'])->name('checkFinancialDoc');
            Route::get('/updateFinancialStatus/{id}/{status}/{name}', [FinancialDocumentsController::class, 'updateStatus'])->name('updateFinancialStatus');

            Route::get('/employment{id}', [EmploymentDocumnetsController::class, 'checkEmploymentDoc'])->name('checkEmploymentDoc');
            Route::get('/updateEmploymentStatus/{id}/{status}/{name}', [EmploymentDocumnetsController::class, 'updateStatus'])->name('updateEmployeeStatus');

            Route::get('/sponsor{id}', [SponsorVisitDocumnetController::class, 'checkSponsorDoc'])->name('checkSponsorDoc');
            Route::get('/updateSponsorStatus/{id}/{status}/{name}', [SponsorVisitDocumnetController::class, 'updateStatus'])->name('updateSponsorStatus');

            Route::get('/nonSponsor{id}', [NonSponsorVisitController::class, 'checkNonSponsorDoc'])->name('checkNonSponsorDoc');
            Route::get('/updateNonSponsorStatus/{id}/{status}/{name}', [NonSponsorVisitController::class, 'updateStatus'])->name('updateNonSponsorStatus');

        });

        Route::prefix('/profile')->group(function () {
            Route::put('/update{id}', [AdminController::class, 'update'])->name('admin.profile.update');
            Route::post('/remove-profile-pic', [AdminController::class, 'removeProfilePic'])->name('removeProfilePic');
            Route::get('/setting', [AdminController::class, 'userSetting'])->name('adminSetting');
            Route::post('/reset-password', [AdminController::class, 'resetPassword'])->name('resetPassword');
        });
    });





});

require __DIR__ . '/auth.php';
