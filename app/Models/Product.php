<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name', 'description', 'price', 'image', 'weight', 'categories_id1'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id1');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }
}

