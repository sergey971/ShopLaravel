<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected  $table = 'categories';
    protected $quarded = false;
    protected $fillable =
        ['title'];
}
