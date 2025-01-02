<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;
// Anasayfa
Route::get('/', function () {
    return redirect()->route('login');
});
//İçerik Rotaları
Route::get('/classes', [ClassController::class, 'index'])->name('classes.index');
Route::get('/class/subjects/{class}', [ClassController::class, 'subjects']);
Route::get('/subject/topics/{subject}', [SubjectController::class, 'topics']);
Route::get('/topic/tests/{topic}', [TopicController::class, 'tests']);
Route::get('/tests/create', [TestController::class, 'create'])->name('tests.create');
Route::get('/tests/{id}', [TestController::class, 'show'])->name('tests.show');
Route::get('/dashboard', [TestController::class, 'index'])->name('dashboard');
Route::post('/tests/store', [TestController::class, 'store'])->name('tests.store');
Route::post('/get-subjects', [TestController::class, 'getSubjects'])->name('get.subjects');
Route::post('/get-topics', [TestController::class, 'getTopics'])->name('get.topics');
Route::post('/tests/send', [TestController::class, 'send'])->name('tests.send');



// Register Rotaları
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Login Rotası
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/classes', [ClassController::class, 'index'])->name('classes.index');
});
