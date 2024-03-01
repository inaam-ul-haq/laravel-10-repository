<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cleared";
});

Auth::routes(['verify' => true, 'login' => false, 'register' => false, 'logout' => false]);

Route::name('front.')->group(function () {
    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'index')->name('welcome');
        Route::get('/about-us', 'about')->name('about');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::get('/terms-of-services', 'terms')->name('terms');
        Route::get('/privacy-policy', 'privacy')->name('privacy');
        Route::get('/return-policy', 'return_policy')->name('return_policy');
        Route::get('/help-center', 'help')->name('help');
    });

    Route::prefix('/user/')->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('signin', 'showLoginForm')->name('login');
            Route::post('signin', 'login');
        });

        Route::controller(RegisterController::class)->group(function () {
            Route::get('signup', 'showRegistrationForm')->name('register');
            Route::post('signup', 'register')->name('register');
        });
    });

    Route::get('verify', function () {
        return view('auth.verify');
    })->name('verify_email')->middleware('CheckVerifiedAccount');
});

Route::group(
    ['prefix' => "my-account", "middleware" => ["auth", 'checkMail']],
    function () {

        Route::get('/', [HomeController::class, 'index'])->name('auth');

        Route::get('profile', [UserController::class, 'editprofile'])->name('myprofile');
        Route::put('edit-my-profile', [UserController::class, 'updatemyprofile'])->name('updatemyprofile');

        Route::get('settings', [HomeController::class, 'changePassword'])->name('change_password');
        Route::post('change-password/update', [HomeController::class, 'updatePassword'])->name('update_password');

        Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

        Route::group(
            ["middleware" => "role:admin"],
            function () {
                Route::resource('users', UserController::class)->middleware('isAdmin');
            }
        );
    }
);
