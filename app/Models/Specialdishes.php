<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialdishes extends Model
{
    use HasFactory;

    protected $fillable = [
        'namepart1',
        'namepart2',
        'img',
        'desc',
        'price',
    ];
}
