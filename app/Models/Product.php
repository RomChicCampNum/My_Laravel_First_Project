<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Spécifie le nom de la table si ce n'est pas le nom par défaut (pluralisé du modèle)
    protected $table = 'products';

    // Si tu n'utilises pas les timestamps, désactive-les
    public $timestamps = false;

    // Spécifie les attributs qui peuvent être assignés en masse
    protected $fillable = ['name', 'price', 'image', 'category'];

    // Typage des attributs (optionnel, mais peut être utile pour PHP 8)
    protected $casts = [
        'price' => 'decimal:2',
    ];
}
