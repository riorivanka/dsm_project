<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//overview admin
Route::get('/', function () {
    // tendang ke login
    if (!session()->has('stt_login')) { return redirect()->route('login'); }
    
    // tendang ke user kalau bukan admin
    if (session('role_akses') !== 'admin') { return redirect()->route('overview_user'); }
    
    return view('overview.overview');
})->name('home');

// overview user
Route::get('/overview_user', function () {
    // tendang ke login
    if (!session()->has('stt_login')) { return redirect()->route('login'); }
    
    //tendang ke admin kalau bukan user
    if (session('role_akses') === 'admin') { return redirect()->route('home'); }
    
    return view('overview.overview_user');
})->name('overview_user');

//new initiative
Route::get('/new_initiative', function () {
    if (!session()->has('stt_login')) { return redirect()->route('login'); }
    return view('initiatives.new_initiative');
})->name('new_initiative');

//initiative semua divisi
Route::get('/initiative/all', function () {
    if (!session()->has('stt_login')) { return redirect()->route('login'); }
    return view('initiatives.all');
})->name('initiative.all');

//initiative corporate group
Route::get('/initiative/corporate', function () {
    if (!session()->has('stt_login')) { return redirect()->route('login'); }
    return view('initiatives.corporate');
})->name('initiative.corporate');

//initiative divisin group
Route::get('/initiative/divisional', function () {
    if (!session()->has('stt_login')) { return redirect()->route('login'); }
    return view('initiatives.divisional');
})->name('initiative.divisional');