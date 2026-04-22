<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Halaman Dashboard
    public function dashboard() {
        $data = [
            'total_users' => User::count(),
            'total_games' => Category::count(),
            'total_revenue' => Transaction::where('status', 'success')->sum('price'),
            'recent_transactions' => Transaction::orderBy('created_at', 'desc')->take(10)->get()
        ];
        return view('admin.dashboard', $data);
    }

    // HALAMAN DAFTAR USER (Fix Variable)
    public function users() {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users', compact('users'));
    }

    // Halaman Kelola Game
    public function games() {
        $games = Category::all();
        return view('admin.games', compact('games'));
    }
}