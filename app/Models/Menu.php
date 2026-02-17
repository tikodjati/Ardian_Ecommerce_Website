<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location' // header | sidebar | footer
    ];

    /**
     * 1 Menu punya banyak MenuItem
     */
    public function items()
    {
        return $this->hasMany(MenuItem::class)->whereNull('parent_id')->orderBy('sort_order');
    }

    /**
     * Semua item tanpa filter (kalau dibutuhkan)
     */
    public function allItems()
    {
        return $this->hasMany(MenuItem::class);
    }
}
