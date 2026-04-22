<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes - AstroStore Home Fix
|--------------------------------------------------------------------------
*/

// HALAMAN DEPAN (USER)
Route::get('/', function () {
    // Kita ambil data dari tabel categories
    $categories = \App\Models\Category::all(); 
    return view('welcome', compact('categories'));
})->name('home');

// ROUTE LOGIN (Agar tidak stuck)
Route::get('/login', function () {
    if (Auth::check()) return redirect('/admin/dashboard');
    return view('auth.login');
})->name('login');

// ROUTE ADMIN (LENGKAP)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/games', [AdminController::class, 'games'])->name('admin.games');
    Route::get('/transactions', [AdminController::class, 'transactions'])->name('admin.transactions');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
});
use App\Http\Controllers\Admin\AccountController;

Route::prefix('admin')->group(function () {
    Route::get('/accounts', [AccountController::class, 'index'])->name('admin.accounts.index');
    Route::get('/accounts/create', [AccountController::class, 'create'])->name('admin.accounts.create');
    Route::post('/accounts/store', [AccountController::class, 'store'])->name('admin.accounts.store');
});
// Alamat untuk halaman detail/order game
Route::get('/order/{slug}', function ($slug) {
    // Cari game berdasarkan slug-nya
    $game = \App\Models\Category::where('slug', $slug)->firstOrFail();
    
    // Tampilkan halaman order (kita akan buat file-nya setelah ini)
    return view('order', compact('game'));
});
// Halaman Cek Transaksi
Route::get('/periksa-pesanan', function () {
    return view('cek-pesanan');
})->name('cek.pesanan');

// Halaman Daftar Harga
Route::get('/layanan', function () {
    // Kita ambil data layanan/produk dari database (asumsi tabelnya bernama services atau products)
    // Jika belum ada tabelnya, kita tampilkan halaman kosong dulu supaya tidak error
    return view('layanan');
})->name('layanan');