<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Cantoneros',
                'fname' => 'Alonica Maiza',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Cantoneros@email.com',
                'password' => bcrypt('Cantoneros')
            ],
            [
                'id' => 2,
                'lname' => 'Tiktokerist',
                'fname' => 'Alonica',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Alonica@email.com',
                'password' => bcrypt('Alonica')
            ],
            [
                'id' => 3,
                'lname' => 'Michel',
                'fname' => 'Mitty',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Mitty@email.com',
                'password' => bcrypt('Mitty')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
