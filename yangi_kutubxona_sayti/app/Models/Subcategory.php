<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Books;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    public function subcategories(){
        return $this->belongsTo(Category::class);
    }

    public function books(){
        return $this->hasOne(Books::class);
    }
}
