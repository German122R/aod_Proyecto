<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xbox extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'model', 'accessories', 'color', 'generation', 'control', 'games', 'launch',
        'control', 'description', 'comment', 'available'
    ];
}
