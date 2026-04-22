<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'total_users' => User::count(),
            'total_games' => Category::count(),
            'total_revenue' => Transaction::where('status', 'success')->sum('price'),
            'recent_transactions' => Transaction::orderBy('created_at', 'desc')->take(10)->get()
        ];
        return view('admin.dashboard', $data);
    }

    public function games()
    {
        $games = Category::all();
        return view('admin.games', compact('games'));
    }

    public function transactions()
    {
        $transactions = Transaction::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.transactions', compact('transactions'));
    }
}