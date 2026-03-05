<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return redirect()->route('login');
// });

Route::get('/', function () {
    return view('overview.overview');
})->name('home');

Route::get('/overview_user', function () {
    return view('overview.overview_user');
})->name('overview_user');

Route::get('/new_initiative', function () {
    return view('initiatives.new_initiative');
})->name('new_initiative');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::get('/initiative/all', function () {
    return view('initiatives.all');
})->name('initiative.all');

Route::get('/initiative/corporate', function () {
    return view('initiatives.corporate');
})->name('initiative.corporate');

Route::get('/initiative/divisional', function () {
    return view('initiatives.divisional');
})->name('initiative.divisional');