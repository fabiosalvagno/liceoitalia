<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'amazon_link',
        'kakitori',
        'lettura',
        'denshi',
        'linkspiega',
        'category_id', // Add this to allow mass assignment for the category relationship
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
