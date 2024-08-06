<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Si tu n'utilises pas les timestamps, désactive-les
    public $timestamps = false;

//    // Spécifie les attributs qui peuvent être assignés en masse
//    protected $fillable = ['name', 'price', 'image', 'category'];

    protected $guarded = ['id', 'crampons'];

    // Typage des attributs (optionnel, mais peut être utile pour PHP 8)
    protected $casts = [
        'price' => 'int',
    ];
}
