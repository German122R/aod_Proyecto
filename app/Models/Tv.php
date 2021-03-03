<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'model', 'accessories', 'color', 'legs', 'keys', 'inches', 'control',
        'description', 'comment', 'available'
    ];
}
