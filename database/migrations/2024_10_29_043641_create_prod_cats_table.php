<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Products;
use App\Models\Categories;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prod_cats', function (Blueprint $table) {
                $table->id('products_category_id');
                $table->foreignIdFor(Products::class,'product_id')->constrained()->cascadeOnDelete();
                $table->foreignIdFor(Categories::class,'category_id')->constrained('categories')->cascadeOnDelete();
                $table->timestamps();
                $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prod_cats');
    }
};
