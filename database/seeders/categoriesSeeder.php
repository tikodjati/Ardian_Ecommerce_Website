<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;
use function Symfony\Component\Clock\now;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $names       = ['Women', 'Men', 'Handbags', 'Accessories', 'Bags', 'Shoes'];
        $slugs       = ['women', 'men', 'handbags', 'accessories', 'bags', 'shoes'];
        $parent_ids  = [null, null, 1, 1, 2, 2];
        $sort_orders = [1, 2, 1, 2, 1, 2];
        $is_actives  = [true, true, true, true, true, true];

        for ($i = 0; $i < count($names); $i++) {
            DB::table('categories')->insert([
                'name' => $names[$i], // string
                'slug' => $slugs[$i], // string
                'parent_id' => $parent_ids[$i],
                'sort_order' => $sort_orders[$i], // 0 atau 1
                'is_active' => $is_actives[$i]
            ]);
        }
    }
}
