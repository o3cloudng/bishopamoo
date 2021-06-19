<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_img',
        'SKU',
        'title',
        'description',
        'price',
        'author',
        'discount_price',
    ];
}
