<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasLengkapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
use App\Models\Students;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function (){
    return view ('about', [
        "title" => "About",
        "nama" => "Joseph Mario",
        "kelas" => "XIPPLG2",
        "foto"=> "image/zidan.jpg"
    ]);
});

Route::group(["prefix"=>"/student"], function(){
    Route::get('/all', [StudentsController::class, 'index']);
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
});

Route::group(["prefix"=>"/kelas"] , function(){
    Route::get('/all', [KelasLengkapController::class, 'index']);
    Route::get('/detail/{kelas}', [KelasLengkapController::class, 'show']);
    Route::get('/create', [KelasLengkapController::class, 'create']);
    Route::post('/add', [KelasLengkapController::class, 'store']);
    Route::delete('/delete/{kelas}', [KelasLengkapController::class, 'destroy']);
    Route::get('/edit/{kelas}', [KelasLengkapController::class, 'edit']);
    Route::post('/update/{kelas}', [KelasLengkapController::class, 'update']);
});

Route::group(["prefix"=>"/login"], function(){
    Route::get('/index', [LoginController::class, 'index']);
    Route::post('/index', [LoginController::class, 'store']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
})->middleware('guest');

Route::group(["prefix"=>"/register"], function(){
    Route::get('/index', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/index', [RegisterController::class, 'store']);
})->middleware('guest');

Route::group(["prefix"=>"/dashboard", 'middleware' => 'auth'], function(){
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/create', [DashboardController::class, 'create']);
    Route::post('/add', [DashboardController::class, 'store']);
    Route::delete('/delete/{student}', [DashboardController::class, 'destroy']);
    Route::get('/edit/{student}', [DashboardController::class, 'edit']);
    Route::post('/update/{student}', [DashboardController::class, 'update']);
    Route::get('/detail/{student}', [DashboardController::class, 'show']);
    Route::get('/kelas/{kelas}', [KelasLengkapController::class, 'dashboard']);
});