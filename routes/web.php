<?php

use App\Http\Controllers\Backend\BE_HomeController;
use App\Http\Controllers\Backend\BE_MovieController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
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
Route::get('/moviesub/{category}/{sub}', [MovieController::class, 'sub']);
Route::get('/movie/single/{title}', [MovieController::class, 'single']);
Route::get('/how-to-download', [HomeController::class, 'how_to']);
Route::get('/report-link', [HomeController::class, 'report_link']);
Route::post('/comment', [HomeController::class,'comment'])->name('comment');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::group(['prefix' => 'mvadmin'], function () {
    Route::get('/', [BE_HomeController::class, 'index']);
    Route::resource('/movie', BE_MovieController::class);
    Route::get('/movie_table', [BE_MovieController::class, 'movie_table'])->name('movie.table');
    Route::post('/get_sub_category', [BE_MovieController::class, 'get_sub_category']);

    Route::resource('/category', CategoryController::class);
    Route::get('/category_table', [CategoryController::class, 'category_table'])->name('category.table');

    Route::resource('/subcategory', SubCategoryController::class);
    Route::get('/subcategory_table', [SubCategoryController::class, 'subcategory_table'])->name('subcategory.table');

    Route::get('/how_to_download', [BE_HomeController::class, 'how_to_download']);

    Route::post('/update_how', [BE_HomeController::class, 'update_how'])->name('update.how');
});



require __DIR__.'/auth.php';
