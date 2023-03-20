<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TheatreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\View;


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

// USER ROUTES
Route::get('/', [MoviesController::class, 'index']);
Route::get('/movies', [MoviesController::class, 'movies']);
Route::get('/top-movies', [MoviesController::class, 'top']);
Route::get('/blog', [MoviesController::class, 'blog']);
Route::get('/synopsis', [MoviesController::class, 'synopsis']);
Route::get('/search', [MoviesController::class, 'search']);
Route::get('/theatre-movies', [MoviesController::class, 'theatre']);

//Route::get('/theatre-movies', [MoviesController::class, 'theatre']);


Route::post('/book', [BookingController::class, 'create']);
Route::get('/notification', [BookingController::class, 'index']);
Route::get('/seats', [BookingController::class, 'seats']);

Route::get('/region', [RegionController::class, 'region']);

//ADMIN ROUTES
Route::get('/admin', function () {
    return view('auth.login');
});


Route::get('/addform', [MoviesController::class, 'addform'])->middleware('auth');
Route::post('/postmovie', [MoviesController::class, 'postmovie'])->middleware('auth');
Route::get('/available', [MoviesController::class, 'available'])->middleware('auth');
Route::get('/edit', [MoviesController::class, 'edit'])->middleware('auth');
Route::put('/update', [MoviesController::class, 'update'])->middleware('auth');
Route::get('/destroy-movie', [MoviesController::class, 'destroy'])->middleware('auth');


Route::resource('customers', CustomerController::class);
Route::get('destroy-customer', [CustomerController::class, 'destroy'])->middleware('auth');

Route::get('/transactions', [TransactionController::class, 'index'])->middleware('auth');

Route::get('/theatres', [TheatreController::class, 'index'])->middleware('auth');

Route::resource('schedules', ScheduleController::class);
Route::get('/destroy-schedule', [ScheduleController::class, 'destroy'])->middleware('auth');


Route::get('/dashboard', function () {
    $theatreas_total_num = DB::table('theatres')->count();
    $transactions_total_num = DB::table('transactions')->count();
    $movies_total_num = DB::table('movies')->count();
    $customers_total_num = DB::table('customers')->count();
    $schedules_total_num = DB::table('schedules')->count();
    $revenue = DB::table('transactions')->sum('amount');
    return view('admin.dashboard', compact('theatreas_total_num', 'transactions_total_num', 'movies_total_num', 'customers_total_num', 'schedules_total_num', 'revenue'));
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
