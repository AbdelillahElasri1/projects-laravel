<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
// use App\Category;
use App\Models\category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        category::create(['name' => 'classical']);
        category::create(['name' => 'rock']);
        category::create(['name' => 'Rapp']);
        category::create(['name' => 'Ray']);
        category::create(['name' => 'love']);
        category::create(['name' => 'orkestra']);
        category::create(['name' => 'chaabi']);

        User::create([
            'name'=> 'admin',
            'email' => 'elasriabdelilah68@gmail.com',
            'password' => bcrypt('admin'),
            'email_verified_at' => NOW()
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
