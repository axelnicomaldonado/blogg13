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
        $user = new User();

        $user->name = "Nico";
        $user->username = "nicodelico";
        $user->email = "correodenico@mail.com";
        $user->password = bcrypt('12345678');

        $user->save();

        $user = new User();

        $user->name = "Juli";
        $user->username = "jota";
        $user->email = "correodejuli@mail.com";
        $user->password = bcrypt('12345678');

        $user->save();

        $user = new User();

        $user->name = "Marco";
        $user->username = "elpista";
        $user->email = "correodemarco@mail.com";
        $user->password = bcrypt('12345678');

        $user->save();

        $user = new User();

        $user->name = "Thomas";
        $user->username = "circa";
        $user->email = "correodethomas@mail.com";
        $user->password = bcrypt('12345678');

        $user->save();
    }
}
