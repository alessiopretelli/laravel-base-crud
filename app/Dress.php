<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = ['type', 'brand', 'size', 'model', 'price', 'description', 'color'];
}
