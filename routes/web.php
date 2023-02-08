<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [DishController::class, 'welcome'])->name('wel');
Route::get('/dashboard', [DishController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/add', [DishController::class, 'create'])->middleware(['auth'])->name('create');
Route::put('', [DishController::class, 'store'])->middleware(['auth'])->name('add');
Route::get('{id}', [DishController::class, 'destroy'])->middleware(['auth'])->name('delete');


require __DIR__.'/auth.php';
