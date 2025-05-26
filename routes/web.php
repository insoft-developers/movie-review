<?php

use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BE_HomeController;
use App\Http\Controllers\Backend\BE_MovieController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MovieController;
use App\Http\Controllers\Frontend\SeederController;
use App\Http\Controllers\Backend\ProfileController;
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
Route::get('/run-seeder/{seeder}', [SeederController::class, 'runSeeder']);

Route::get('/get_movie/{id}', [HomeController::class, 'get_movie']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/movie/{category}', [MovieController::class, 'index']);
Route::get('/moviesub/{category}/{sub}', [MovieController::class, 'sub']);
Route::get('/movie/single/{title}', [MovieController::class, 'single']);
Route::get('/how-to-download', [HomeController::class, 'how_to']);

Route::get('/report-link', [HomeController::class, 'report_link']);
Route::post('/comment', [HomeController::class, 'comment'])->name('comment');
Route::post('/movie_per_page', [HomeController::class, 'movie_per_page'])->name('movie.per.page');
Route::post('/order_movie', [HomeController::class, 'order_movie'])->name('order.movie');
Route::post('/movie_type_change', [HomeController::class, 'movie_type_change'])->name('movie.type.change');
Route::post('/search_advance', [HomeController::class, 'search_advance'])->name('search.advance');

Route::post('/movie_per_page_search', [HomeController::class, 'movie_per_page_search'])->name('movie.per.page.search');
Route::post('/order_movie_search', [HomeController::class, 'order_movie_search'])->name('order.movie.search');

Route::get('/movie-list-search/{is_search}', [HomeController::class, 'movie_list_search']);
Route::get('/movie-advance-search', [HomeController::class, 'movie_advance_search']);

Route::post('/movie_home_search', [HomeController::class, 'movie_home_search'])->name('movie.home.search');
Route::post('/movie_per_page_sub', [MovieController::class, 'movie_per_page_sub'])->name('movie.per.page.sub');
Route::post('/order_movie_sub', [MovieController::class, 'order_movie_sub'])->name('order.movie.sub');
Route::get('/footer/{title}', [HomeController::class, 'footer']);

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/mvadmin/login', [AdminAuthController::class, 'showLoginForm'])->name('show.login');
Route::post('/mvadmin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/mvadmin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'mvadmin', 'middleware' => ['auth:admin']], function () {
    // Route::group(['prefix' => 'mvadmin'], function () {

    Route::get('/', [BE_HomeController::class, 'index']);
    Route::resource('/movie', BE_MovieController::class);
    Route::get('/movie_table', [BE_MovieController::class, 'movie_table'])->name('movie.table');
    Route::post('/get_sub_category', [BE_MovieController::class, 'get_sub_category']);

    Route::resource('/category', CategoryController::class);
    Route::get('/category_table', [CategoryController::class, 'category_table'])->name('category.table');

    Route::resource('/subcategory', SubCategoryController::class);
    Route::get('/subcategory_table', [SubCategoryController::class, 'subcategory_table'])->name('subcategory.table');

    Route::get('/how_to_download', [BE_HomeController::class, 'how_to_download']);
    Route::get('/footer', [BE_HomeController::class, 'footer']);

    Route::post('/update_how', [BE_HomeController::class, 'update_how'])->name('update.how');
    Route::post('/footer_update', [BE_HomeController::class, 'footer_update'])->name('footer.update');

    Route::get('/report_dead_link', [BE_HomeController::class, 'report_dead_link']);
    Route::post('/dead_link_update', [BE_HomeController::class, 'dead_link_update'])->name('update.dead.link');

    Route::resource('admin', AdminController::class);
    Route::get('/admin_table', [AdminController::class, 'admin_table'])->name('admin.table');

    Route::resource('setting', SettingController::class);
    Route::get('setting_table', [SettingController::class, 'setting_table'])->name('setting.table');

    Route::resource('profile', ProfileController::class);
    Route::post('profile_update', [ProfileController::class, 'profile_update'])->name('profile.update');

    Route::get('/change_password', [ProfileController::class, 'change_password']);
    Route::post('/password_update', [ProfileController::class, 'password_update'])->name('password.renew');
});

require __DIR__ . '/auth.php';
