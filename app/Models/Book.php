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
    ];
}
