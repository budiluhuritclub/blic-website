<?php

use App\Http\Controllers\Admin\Account\AccountController;
use App\Http\Controllers\Admin\Applicant\ApplicantController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Devcamp\BatchController;
use App\Http\Controllers\Admin\Devcamp\DevcampController;
use App\Http\Controllers\Elearning\DashboardController as ElearningDashboardController;
use App\Http\Controllers\Elearning\ProfileController;
use App\Http\Controllers\Event\EventregisterController;
use App\Http\Controllers\Event\SuccessController;
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

// redirecting
Route::redirect('/register', '/');
Route::redirect('/elearning', '/elearning/dashboard');
Route::redirect('/admin', 'admin/dashboard');

//frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutusController::class, 'index'])->name('about-us');
Route::get('/division', [DivisionController::class, 'index'])->name('division');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/news', [NewsController::class, 'index'])->name('news');

//onepage
Route::get('/welcome', [OnepageController::class, 'index'])->name('welcome');

// recruitment
Route::get('/apply-member', [RegistrationmembersController::class, 'form'])->name('apply-form');
Route::post('/applying-as-member', [RegistrationmembersController::class, 'apply'])->name('applying-member');
Route::get('/apply-success', [RegistrationmembersController::class, 'success'])->name('apply-success');

// event
Route::get('/devcamp-01', [EventregisterController::class, 'index'])->name('register-event');
Route::post('/devcamp-01/store', [EventregisterController::class, 'store'])->name('register-event-store');
Route::get('/devcamp-01/success', [SuccessController::class, 'index'])->name('success-register-event');

// elearning
Route::prefix('elearning')->group(function () {
    Route::middleware(['middleware' => 'auth', 'member'])->group(function () {
        // dashboard
        Route::get('/dashboard', [ElearningDashboardController::class, 'index'])->name('dashboard-elearning');

        // account
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::get('/security', [ProfileController::class, 'security'])->name('security');
        Route::post('/security/changing-password', [ProfileController::class, 'changepassword'])->name('changepassword');
    });
});

//admin
Route::prefix('admin')->group(function () {
    Route::middleware(['middleware' => 'auth', 'admin'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard-admin');

        // account
        Route::resource('account', AccountController::class);

        // applicant
        Route::get('/applicant', [ApplicantController::class, 'index'])->name('applicant');
        Route::get('/applicant/detail/{id}', [ApplicantController::class, 'detail'])->name('detail-applicant');

        // devcamp
        Route::resource('devcamp', DevcampController::class);
        Route::resource('batch', BatchController::class);
    });
});