<?php

use App\Http\Controllers\DocumentsController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
/*     Route::get('/', function () {
        return view('welcome');
    }); */

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/user')->group(function () {

        Route::prefix('/personal-documents')->group(function () {
            Route::get('/', [DocumentsController::class, 'personalDocIndex'])->name('personal.documents.index');
            Route::get('/create', [DocumentsController::class, 'create'])->name('personal.documents.create');
            Route::post('/store', [DocumentsController::class, 'store'])->name('personal.documents.store');
            Route::get('/edit/{id}', [DocumentsController::class, 'edit'])->name('personal.documents.edit');
            Route::put('/update/{id}', [DocumentsController::class, 'update'])->name('personal.documents.update');
            Route::delete('/destroy/{id}', [DocumentsController::class, 'destroy'])->name('personal.documents.destroy');
        });


    });


});

require __DIR__.'/auth.php';
