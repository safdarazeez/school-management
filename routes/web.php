<?php

use App\Http\Controllers\AccademicYearController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\FeeHeadController;
use App\Http\Controllers\FeeStructerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminController::class, 'index'])->name('admin.login');
        Route::get('register', [AdminController::class, 'register'])->name('admin.register');
        Route::post('authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');

    });
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('form', [AdminController::class, 'form'])->name('admin.form');
        Route::get('table', [AdminController::class, 'table'])->name('admin.table');
        //academic year routes
        Route::get('accademic-year/create', [AccademicYearController::class, 'index'])->name('create');
        Route::post('accademic-year.store', [AccademicYearController::class, 'store'])->name('store');
        Route::get('accademic-year/read', [AccademicYearController::class, 'read'])->name('read');
        Route::get('academic-year/delete/{id}', [AccademicYearController::class, 'delete'])->name('delete');
        Route::get('academic-year/edit/{id}', [AccademicYearController::class, 'edit'])->name('edit');
        Route::post('academic-year/update/{id}', [AccademicYearController::class, 'update'])->name('update');
        //classes routes
        Route::get('class/create', [ClassesController::class, 'index'])->name('class');
        Route::post('class.store', [ClassesController::class, 'store'])->name('class.store');
        Route::get('class/read', [ClassesController::class, 'read'])->name('class.read');
        Route::get('class/delete/{id}', [ClassesController::class, 'delete'])->name('class_delete');
        Route::get('class/edit/{id}', [ClassesController::class, 'edit'])->name('class.edit');
        Route::post('class/update/{id}', [ClassesController::class, 'update'])->name('class.update');
    });
    // FeeHead routes
    Route::get('feehead/create', [FeeHeadController::class, 'index'])->name('feehead.create');
    Route::post('feehead/store', [FeeHeadController::class, 'store'])->name('feehead.store');
    Route::get('feehead/read', [FeeHeadController::class, 'read'])->name('feehead.read');
    Route::get('feehead/delete/{id}', [FeeHeadController::class, 'delete'])->name('feehead.delete');
    Route::get('feehead/edit/{id}', [FeeHeadController::class, 'edit'])->name('feehead.edit');
    Route::post('feehead/update/{id}', [FeeHeadController::class, 'update'])->name('feehead.update');
    // FeeStructer routes
    Route::get('fee-structure/create', [FeeStructerController::class, 'index'])->name('fee-structure.create');
    Route::post('fee-structure/store', [FeeStructerController::class, 'store'])->name('fee-structure.store');
    Route::get('fee-structure/read', [FeeStructerController::class, 'read'])->name('fee-structure.read');

});



