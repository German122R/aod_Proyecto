<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'model', 'accessories', 'color', 'memory', 'chip', 'protective',
        'description', 'comment', 'available'
    ];
    
}


