<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\App\TestDataSeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $admin = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'ditrix2006@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty123'),
            'remember_token' => Str::random(10),
        ]);
        // $admin->save()
        //$this->call([TestDataSeeder::class]);

    }
}
