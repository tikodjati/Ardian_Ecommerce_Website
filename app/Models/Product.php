<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'category_id',
        'is_featured',
        'is_new_arrival',
        'is_active'
    ];

    // Product milik 1 Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Product punya banyak gambar
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Many to Many → Collections
    public function collections()
    {
        return $this->belongsToMany(
            Collection::class,
            'product_collections'
        );
    }

    // Many to Many → Materials
    public function materials()
    {
        return $this->belongsToMany(
            Material::class,
            'product_materials'
        );
    }
}
