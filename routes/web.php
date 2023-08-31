<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegbarangController;
use App\Http\Controllers\UploadsController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/reg', function () {
    return view('register_barang');
})->middleware(['auth', 'verified'])->name('reg');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('dashbord',[DashboardController::class,'show'])->name('dashboard');

    Route::get('barang',[BarangController::class,'show_barang'])->name('barang');
    Route::get('/search', [BarangController::class, 'search'])->name('search');
    // Route::post('create', [RegbarangController::class, 'create'])->name('create'); // Menyimpan data produk


    Route::get('uploads', [RegbarangController::class,'index'])->name('uploads');
    Route::post('save',[RegbarangController::class,'store'])->name('uploads.store');
});

require __DIR__.'/auth.php';
