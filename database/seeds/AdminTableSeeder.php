<?php
use Illuminate\Database\Seeder;


/**
 * Seeder
 */
class AdminTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('users')->insert(array(

            'first_name' => 'Juan Carlos',
            'last_name'  => 'Agaton Valente',
            'full_name' => 'Juan Carlos Agaton Valente',
            'email' 	 => 'ing_carlosagaton@hotmail.com',
            'telephone' => '3222255735',
            'cellphone' => '3221008052',
            'role' => 'superadmin',
            'password' 	 => \Hash::make('secret')
        ));
    }
}
?>