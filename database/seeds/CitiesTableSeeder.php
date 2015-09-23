<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

/**
 * Seeder
 */
class CitiesTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 50; $i++) {

            \DB::table('cities')->insert(array(
                'city' => $faker->unique()->city,
                'code' => $faker->unique()->postcode,
            ));
        }
    }
}
?>