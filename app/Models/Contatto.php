<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contatto extends Model
{
    protected $fillable = ['nome', 'email', 'messaggio'];
}
