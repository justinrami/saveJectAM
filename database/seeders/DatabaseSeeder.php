<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Subject::factory(5) ->create();
        \App\Models\User::factory()->create([
             'name' => 'Justin Rami',
           'email' => 'test@example.com',
        ]);

        \App\Models\Subject::factory() ->create([
            'name' => 'Matemática'
        ]);
    }
}
