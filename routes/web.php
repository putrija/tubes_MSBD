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
Route::get('/guru', [App\Http\Controllers\TeacherController::class, 'index'],)->name('guru');
Route::get('/guru/edit', [App\Http\Controllers\TeacherController::class, 'edit'])->name('edit_guru');

//Nilai
Route::get('/nilai', [App\Http\Controllers\StudentsReportController::class, 'index'])->name('nilai');
Route::get('/nilai/edit', [App\Http\Controllers\StudentsReportController::class, 'edit'])->name('edit_nilai');


// Route::get('/siswa', function () {
//     return view('halaman_siswa.siswa', [
//         "titlenya" => "Halaman Siswa"
//     ]);
// });

Route::get('/siswa', [App\Http\Controllers\StudentController::class, 'index'])->name('siswa');

Route::get('/landing', function () {
    return view('landing.index', [
        "titlenya" => "SMAN 14 MEDAN"
    ]);
});
Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/dataguru', function () {
    return view('admin.dataguru');
});
Route::get('/detailguru', function () {
    return view('admin.detailguru');
});
Route::get('/detailsiswa', function () {
    return view('admin.detailsiswa');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
