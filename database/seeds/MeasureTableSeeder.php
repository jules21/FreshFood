<?php

use App\Models\Measure;
use Illuminate\Database\Seeder;

class MeasureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $measures =
            [
            ['id' => '1', 'name' => 'grams', 'unit' => 'KG'],
            ['id' => '2', 'name' => 'Liters', 'unit' => 'L'],
            ['id' => '3', 'name' => 'Meters', 'unit' => 'M'],

        ];

        foreach ($measures as $measure) {
            Measure::create($measure);
        }
    }
}
