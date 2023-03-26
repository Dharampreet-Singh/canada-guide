<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\GroceriesAdminController;
use App\Http\Controllers\GroceryStoresAdminController;
use App\Http\Controllers\HouseAdminController;
use App\Http\Controllers\TouristPlacesAdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BlogsCommentsController;
use App\Http\Controllers\ScheduleEmailsAdminController;
use App\Http\Controllers\UserAdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        //login route
        // Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
        //store
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('adminlogin');
    });

    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    });

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/other/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/hello', function () {
    return response("<h1>Hello!, How are you? </h1>");
});

Route::resource('/blogs', BlogsController::class);
//Route::resource('/blogs', BlogsCommentsController::class);

Route::resource('/admin/housing', HouseAdminController::class);
Route::resource('/admin/grocery_stores', GroceryStoresAdminController::class);
Route::resource('/admin/users', UserAdminController::class);
Route::resource('/admin/tourist_places', TouristPlacesAdminController::class);
Route::resource('/admin/schedule_emails', ScheduleEmailsAdminController::class);

Route::resource('grocery_stores', \App\Http\Controllers\GroceryController::class);
Route::resource('housings', \App\Http\Controllers\HousingController::class);
Route::resource('grocerysearch', \App\Http\Controllers\GrocerySearchController::class);
Route::resource('housingsearch', \App\Http\Controllers\HousingSearchController::class);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('auth/google', 'App\Http\Controllers\Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\GoogleController@handleGoogleCallback');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/getstats', [AdminDashboardController::class, 'index']);
