<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('portofolio');
// });


// ROUTE Portfolio
// Route::get('/', function () {
//     return view('home');
// })->name('utama');

// Route::get('/about', function () {
//     return view('portofolio');
// })->name('tentang-saya');


// Route My Portfolio
Route::get('/', [ProfileController::class, 'index']);

// Route untuk Praktikum 
Route::get('data-mahasiswa',[MahasiswaController::class, 'index']);
Route::get('add-mahasiswa',[MahasiswaController::class, 'create']);
Route::post('save-mahasiswa',[MahasiswaController::class, 'ambilData'])->name('mahasiswa.save-mahasiswa');
Route::delete('delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('delete.mahasiswa');
Route::get('edit-mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('edit.mahasiswa');
Route::put('edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('update.mahasiswa');

// Route TUGAS WEB
Route::get('data-blog',[BlogController::class, 'index']);
Route::get('add-blog',[BlogController::class, 'create']);
Route::post('save-blog',[BlogController::class, 'ambilData'])->name('blog.save-blog');
Route::delete('delete-blog/{id}', [BlogController::class, 'destroy'])->name('delete.blog');
Route::get('edit-blog/{id}/edit', [BlogController::class, 'edit'])->name('edit.blog');
Route::put('edit-blog/{id}', [BlogController::class, 'update'])->name('update.blog');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
