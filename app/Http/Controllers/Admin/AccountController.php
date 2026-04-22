<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    // Menampilkan halaman daftar akun di admin
    public function index()
    {
        $accounts = Account::latest()->get();
        return view('admin.accounts.index', compact('accounts'));
    }

    // Menampilkan form tambah akun
    public function create()
    {
        return view('admin.accounts.create');
    }

    // Menyimpan data akun baru ke database
    public function store(Request $request)
    {
        Account::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'rank_icon' => $request->rank_icon, // Nanti diisi nama file gambar (misal: bintang.jpeg)
            'description' => $request->description,
            'price' => $request->price,
            'account_data' => $request->account_data, // Data login username:password
            'status' => 'available',
        ]);

        return redirect()->route('admin.accounts.index')->with('success', 'Akun berhasil ditambahkan!');
    }
}