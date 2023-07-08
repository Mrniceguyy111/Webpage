<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_categories')->insert([
            'name' => 'tecnologia'
        ]);
        DB::table('post_categories')->insert([
            'name' => 'Cuidado animal'
        ]);
        DB::table('post_categories')->insert([
            'name' => 'Polemica'
        ]);
        DB::table('post_categories')->insert([
            'name' => 'Medio ambiente'
        ]);
    }
}
