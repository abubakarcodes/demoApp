<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Category::truncate();
        Product::truncate();
        DB::table('category_product')->truncate();
        Category::flushEventListeners();
        Product::flushEventListeners();

        // \App\Models\User::factory(10)->create();

        $count = 100;
         Category::factory($count)->create();
         Size::factory($count)->create();
        Product::factory($count)->create()->each(function($product){
            $categories = Category::all()->random(mt_rand(1,5))->pluck('id');
            $sizes = Size::all()->random(mt_rand(1,5))->pluck('id');
                $product->categories()->attach($categories);
                 $product->sizes()->attach($sizes);
        });

    }
}
