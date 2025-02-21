<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MovieController;
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

Route::get('get_movie/{id}', [HomeController::class, 'get_movie']);




Route::get('/', [HomeController::class, 'index']);
Route::get('/movie/{category}', [MovieController::class, 'index']);
Route::get('/movie/single/{title}', [MovieController::class, 'single']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
