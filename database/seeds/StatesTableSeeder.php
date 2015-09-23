<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

/**
 * Seeder
 */
class StatesTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 50; $i++) {

            \DB::table('countries')->insert(array(
                'country' => $faker->unique()->state,
                'code' => $faker->postcode,
            ));
        }
    }
}
?>