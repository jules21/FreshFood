<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories =
            [
            ['id' => '1', 'name' => 'Fruits'],
            ['id' => '2', 'name' => 'Vegetables'],
            ['id' => '3', 'name' => 'Juices'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
