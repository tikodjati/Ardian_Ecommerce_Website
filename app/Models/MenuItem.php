<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'title',
        'url',
        'type',        // category | collection | page | custom
        'parent_id',
        'sort_order'
    ];

    /**
     * Menu induknya
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * Parent (untuk nested menu)
     */
    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    /**
     * Children (submenu)
     */
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')
                    ->orderBy('sort_order');
    }

    /**
     * Recursive children (untuk cascading multi level)
     */
    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }
}
