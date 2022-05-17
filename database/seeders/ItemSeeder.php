<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Carbon\Carbon;
use Faker\Generator as Faker;
use DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('items')->truncate();

        $names = [
            'Air Force',
            'Blazer',
            'React Infinity Run',
            'Air Zoom',
            'Go'
        ];

        $prices = [
            '100.00',
            '100.00',
            '160.00',
            '120.00',
            '130.00'
        ];

        for ($i = 0; $i < count($names); $i++) {
            Item::create([
                'name'       => $names[$i],
                'brand'      => 'Nike',
                'price'      => $prices[$i],
                'about'      => $faker->text,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
