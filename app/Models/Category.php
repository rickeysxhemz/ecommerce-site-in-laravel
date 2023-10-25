<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function FeaturedCategory()
    {
        return $this->hasMany(FeaturedCategory::class, 'category_id', 'id');
    }
}
