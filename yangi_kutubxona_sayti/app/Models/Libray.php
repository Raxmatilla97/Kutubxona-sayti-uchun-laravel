<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libray extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','title', 'manzil', 'img', 'description', 'slug'
        ];
}
