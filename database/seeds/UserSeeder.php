<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'username' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password123'),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'role' => 'admin'
        ]);
    }
}
