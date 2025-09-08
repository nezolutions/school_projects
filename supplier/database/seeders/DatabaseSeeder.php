<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = [[
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => bcrypt('1234'),
            'level' => 2,
            'email' => 'admin@email.com'
        ], [
            'name' => 'Developer',
            'username' => 'developer',
            'password' => bcrypt('gatrarmx'),
            'level' => 1,
            'email' => 'dev@email.com'
        ]];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
