<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MahasiswaController\php;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Models\Mahasiswa;

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



// Route::get('/dashboard', [MahasiswaController::class, 'index']);
// Route::post('/Mahasiswa/create', [MahasiswaController::class, 'create']);
// Route::get('/Mahasiswa/{id}/Edit',[MahasiswaController::class,'Edit']);
// Route::post('/Mahasiswa/{id}/Update',[MahasiswaController::class,'Update']);
// Route::get('/Mahasiswa/{id}/Delete',[MahasiswaController::class,'Delete']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [MahasiswaController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/dashboard', [MahasiswaController::class, 'index']);
    Route::get('/Mahasiswa/create', [MahasiswaController::class, 'index']);
Route::post('/Mahasiswa/create', [MahasiswaController::class, 'create']);
Route::get('/Mahasiswa/{id}/Edit',[MahasiswaController::class,'Edit']);
Route::post('/Mahasiswa/{id}/Update',[MahasiswaController::class,'Update'])->name('m.update');
Route::get('/Mahasiswa/{id}/Delete',[MahasiswaController::class,'Delete']);

});

// Route::get('/Mahasiswa', function () {
//     return view('Mahasiswa'); // nama file blade-nya nanti
// })->middleware(['auth'])->name('Mahasiswa');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
