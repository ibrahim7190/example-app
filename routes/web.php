<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

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

Route::get('/', [StudentController::class, 'home'])->name('home');

Route::prefix('student')->group(function () {

    Route::get('index', [StudentController::class, 'index'])->name('student.index');
    Route::get('create', [StudentController::class, 'create'])->name('student.create');
    //store
    Route::post('store', [StudentController::class, 'store'])->name('student.store');
    Route::get('edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    //update
    Route::post('update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
});
