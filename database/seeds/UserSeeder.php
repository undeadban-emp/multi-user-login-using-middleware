<?php

use App\User;
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
            'name' => 'edcel',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'lyka',
            'role' => '2',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'ervy',
            'role' => '3',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
