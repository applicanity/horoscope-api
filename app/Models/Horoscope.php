<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horoscope extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'description',
        'image',
        'date_start',
        'date_end'
    ];
}
