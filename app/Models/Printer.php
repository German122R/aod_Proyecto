<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'model', 'accessories', 'color', 'connectivity', 'printcolor', 'resolution', 'speed',
        'pagesperminute', 'keys', 'description', 'comment', 'available'
    ];
}
