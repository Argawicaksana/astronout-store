<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    // Menentukan kolom mana saja yang boleh diisi
    protected $fillable = [
        'title', 
        'slug', 
        'rank_icon', 
        'description', 
        'price', 
        'account_data', 
        'status'
    ];
}