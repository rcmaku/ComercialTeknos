<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory, softDeletes;

    protected $fillable = ['product_name','product_description','inStock','price'];

    public function categories(){
        return $this->belongsToMany(
            Categories::class, // The related model
            'prod_cats',       // The name of the pivot table
            'product_id',      // Foreign key on the pivot table for the product
            'category_id'      // Foreign key on the pivot table for the category
        );
    }
}
