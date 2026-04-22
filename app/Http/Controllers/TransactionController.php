<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function checkout(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'service_id' => 'required',
            'category_id' => 'required',
        ]);

        $service = Service::findOrFail($request->service_id);
        $category = Category::findOrFail($request->category_id);
        $invoice = 'AST-' . strtoupper(bin2hex(random_bytes(3)));

        Transaction::create([
            'user_id' => Auth::id(),
            'invoice_id' => $invoice,
            'game_name' => $category->name,
            'user_game_id' => $request->user_id,
            'zone_id' => $request->zone_id,
            'item_name' => $service->name,
            'price' => $service->price,
            'status' => 'pending'
        ]);

        return "Berhasil! Invoice: " . $invoice;
    }
}