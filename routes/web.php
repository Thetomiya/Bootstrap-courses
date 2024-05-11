<?php

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

Route::fallback(function () {
    return redirect()->to('/');
});

Route::get('/', [\App\Http\Controllers\showController::class, 'showLessonsList'])->name('home');

Route::get('/tests', [\App\Http\Controllers\showController::class, 'showTestsList'])->name('testsList');

Route::get('/pairs', [\App\Http\Controllers\showController::class, 'showGame'])->name('game');

Route::get('/practice', [\App\Http\Controllers\showController::class, 'showPracticeList'])->name('practiceList');
Route::get('/editor', [\App\Http\Controllers\showController::class, 'showEditor'])->name('editor');

Route::get('/sign_in', [\App\Http\Controllers\showController::class, 'showLoginForm'])->name('login');
Route::post('/sign_in', [\App\Http\Controllers\authController::class, 'login']);

Route::get('/sign_up', [\App\Http\Controllers\showController::class, 'showRegistrationForm'])->name('registrationPage');
Route::post('/sign_up', [\App\Http\Controllers\authController::class, 'registration']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', function () {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('home');
    })->name('logout');

    Route::get('/profile', [\App\Http\Controllers\showController::class, 'showProfile'])->name('profile');
    Route::post('/profile', \App\Http\Controllers\changeNameController::class);

    Route::get('/lesson/{lesson}', [\App\Http\Controllers\showController::class, 'showLesson'])->name('lesson.show');
    Route::get('/practice/{practice}', [\App\Http\Controllers\showController::class, 'showPractice'])->name('practice.show');

    Route::get('/tests/test/{testNum}', function ($testNum) {
        if ($testNum > 3) {
            return redirect('/home');
        }
        return app(\App\Http\Controllers\showController::class)->showTest($testNum);
    })->name('test.show');

    Route::post('/tests/test/{testNum}', [\App\Http\Controllers\testHandlerController::class, 'testHandle']);


    Route::get('/landing-for-lesson-10', function () {
        return view('landing-for-lesson-10/index');
    });
});


