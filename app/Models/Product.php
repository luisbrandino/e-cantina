<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'ingredients' => 'array'
    ];

    protected $fillable = [
        'name',
        'price',
        'image_url',
        'ingredients',
        'on_menu'
    ];

    public function getPriceAttribute() {
        return $this->attributes['price'] / 100;
    }
}
