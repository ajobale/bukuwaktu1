<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([

            'name' => 'Ikbal Maulana',
            'username' => 'ikbalmaulana',
            'email' => 'ikbalmaulanaalfatih@gmail.com',
            'password' => '12345678'

        ]);
        User::create([

            'name' => 'fizi',
            'username' => 'fizi',
            'email' => 'fizi@gmail.com',
            'password' => '12345678'

        ]);

        User::factory(10)->create();
    }
}
