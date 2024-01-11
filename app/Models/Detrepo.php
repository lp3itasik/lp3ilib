<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detrepo extends Model
{
    use HasFactory;

    protected $fillable = [
        'series',
    ];

    protected $table = 'detail_repositories';
}
