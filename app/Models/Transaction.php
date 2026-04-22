<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'invoice_id', 'game_name', 'user_game_id', 
        'zone_id', 'item_name', 'price', 'status'
    ];
}