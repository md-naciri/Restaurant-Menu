<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
require __DIR__.'/auth.php';

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DishController::class, 'welcome'])->name('wel');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DishController::class, 'index'])->name('dashboard');
    Route::get('/add', [DishController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [DishController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [DishController::class, 'update'])->name('update');
    Route::put('/store', [DishController::class, 'store'])->name('store');
    Route::get('/delete/{id}', [DishController::class, 'destroy'])->name('delete');
    Route::get('/menu', [DishController::class, 'editMenu'])->name('menu');
    Route::put('/Menu/update', [DishController::class, 'updateMenu'])->name('updateMenu');
});



// route::get('/admin/show/{id}', [FoodController::class, 'show'])->name('show');
