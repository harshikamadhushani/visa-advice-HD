<?php

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
            Route::get('/create', [PersonalDocumentsController::class, 'create'])->name('personal.documents.create');
            Route::post('/store', [PersonalDocumentsController::class, 'store'])->name('personal.documents.store');
            Route::get('/edit/{id}', [PersonalDocumentsController::class, 'edit'])->name('personal.documents.edit');
            Route::put('/update/{id}', [PersonalDocumentsController::class, 'update'])->name('personal.documents.update');
            Route::delete('/destroy/{id}', [PersonalDocumentsController::class, 'destroy'])->name('personal.documents.destroy');
        });
    });

    Route::middleware('role:admin')->prefix('/admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

    });

});

require __DIR__ . '/auth.php';
