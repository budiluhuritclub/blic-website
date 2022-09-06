<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DivisionController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\OnepageController;
use App\Http\Controllers\Frontend\RegistrationmembersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutusController::class, 'index'])->name('about-us');
Route::get('/division', [DivisionController::class, 'index'])->name('division');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/news', [NewsController::class, 'index'])->name('news');

//onepage
Route::get('/welcome', [OnepageController::class, 'index'])->name('welcome');


//admin
Route::prefix('admin')->group(function () {
    Route::middleware(['middleware' => 'auth', 'admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});