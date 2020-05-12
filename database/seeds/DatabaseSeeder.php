<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        factory(App\Models\Product::class, 20)->create();
        //     ->each(function ($product) {
        //         $product->category->save(factory(App\Models\Category::class)->make());
        //     })
        // ;
    }
}
