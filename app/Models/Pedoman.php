<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedoman extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'file_name'
    ];

    protected $table = 'pedoman';
}
