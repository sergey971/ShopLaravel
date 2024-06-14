<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table = 'products';
    public $timestamps = false;
    protected $fillable =
        [
            'name',
            'description',
            'content',
            'preview_img',
            'price',
            'count',
            'is_published',
            'category_id',

        ];
}
