<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'category',
        'color',
        'price',
        'size',
        'description'
    ];
}
