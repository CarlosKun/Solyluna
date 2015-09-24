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

            \DB::table('states')->insert(array(
                'state' => $faker->unique()->state,
                'code' => $faker->postcode,
            ));
        }
    }
}
?>