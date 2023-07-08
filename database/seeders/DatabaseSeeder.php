<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Suscription;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Suscription::factory(3)->create();
        $this->call(SusriptionsSeeder::class);
        \App\Models\User::factory()->create([
            'name' => 'rcomunica',
            'email' => 'test@example.com',
        ]);


        // $this->call(PostCategorySeeder::class);

        \App\Models\Address::factory(5)->create();
        \App\Models\AnimalsCategory::factory(5)->create();
        \App\Models\PostCategory::factory(5)->create();
        \App\Models\Post::factory(5)->create();

        $this->call(TeamSeeder::class);

        DB::unprepared(file_get_contents(__DIR__ . '\Animals.sql'));
        DB::unprepared(file_get_contents(__DIR__ . '\AnimalBreed.sql'));
    }
}
