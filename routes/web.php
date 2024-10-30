<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplianceController;
use App\Http\Controllers\ContactController;


/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User routes
Route::get('/index', [UserController::class, 'index'])->name('index');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/calculate', [UserController::class, 'calculate'])->name('calculate');
Route::get('/result', [UserController::class, 'result'])->name('result');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/guest_result', [UserController::class, 'guest_result'])->name('guest_result');
Route::get('/calculate_guest', [UserController::class, 'calculate_guest'])->name('calculate_guest');

// Login Routes
Route::get('/loginpage', [AuthController::class, 'showLoginForm'])->name('loginpage');
Route::post('/loginpage', [AuthController::class, 'login'])->name('login');

// Signup Routes
Route::get('/signup', [AuthController::class, 'showSignUpForm'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'register'])->name('signup');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


//contact us
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// rsult

Route::middleware('auth')->group(function () {
    Route::get('/calculate', function () {
        return view('calculate');
    })->name('calculate');

    Route::post('/appliance/store', [ApplianceController::class, 'store'])->name('appliance.store');
    Route::get('/result', [ApplianceController::class, 'result'])->name('appliance.result');
});



// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profiles', [AuthController::class, 'showProfile'])->name('profiles');
    Route::get('/profiles/edit', [AuthController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profiles/update', [AuthController::class, 'updateProfile'])->name('profile.update');

    
});



require __DIR__.'/auth.php';
