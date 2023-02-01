<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Josue Garza',
            'email' => 'negociosgarzas@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');

        User::factory(17)->create();
    }
}
