<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Nico",
            'username' => "nicodelico",
            'email' => 'nico@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => "Juli",
            'username' => "jota",
            'email' => 'juli@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => "Marco",
            'username' => "elpista",
            'email' => 'marco@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => "Thomas",
            'username' => "circa",
            'email' => 'thomas@mail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
