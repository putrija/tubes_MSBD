<?php

use Illuminate\Support\Facades\Route;

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

//Guru
Route::get('/guru', [App\Http\Controllers\TeacherController::class, 'index'])->name('guru');
Route::get('/guru/edit', [App\Http\Controllers\TeacherController::class, 'edit'])->name('editguru');

Route::get('/siswa', function () {
    return view('halaman_siswa.siswa', [
        "titlenya" => "Halaman Siswa"
    ]);
});
Route::get('/landing', function () {
    return view('landing.index', [
        "titlenya" => "Halaman Siswa"
    ]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
