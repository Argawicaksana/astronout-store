<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Account;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Ambil kategori game
        $categories = Category::all();

        // Ambil akun PB yang statusnya 'available'
        $pb_accounts = Account::where('status', 'available')->latest()->get();

        return view('welcome', compact('categories', 'pb_accounts'));
    }
}