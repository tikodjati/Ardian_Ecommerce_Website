<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active'
    ];

    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'product_collections'
        );
    }
}
