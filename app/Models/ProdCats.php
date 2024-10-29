<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdCats extends Model
{
    /** @use HasFactory<\Database\Factories\ProdCatsFactory> */
    use HasFactory;

    protected $fillable=['product_id','category_id'];
}
