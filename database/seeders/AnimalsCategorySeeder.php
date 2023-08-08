<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnimalsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Alimentos y Snaks',
            'slug' => Str::slug($name),
        ]);

        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Accesorios',
            'slug' => Str::slug($name),
        ]);

        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Juguetes interactivos',
            'slug' => Str::slug($name),
        ]);

        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Ropa y moda',
            'slug' => Str::slug($name),
        ]);

        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Camas y muebles',
            'slug' => Str::slug($name),
        ]);

        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Higiene y cuidado',
            'slug' => Str::slug($name),
        ]);

        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Transporte y viaje',
            'slug' => Str::slug($name),
        ]);

        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Entretenimiento y educación',
            'slug' => Str::slug($name),
        ]);

        \App\Models\AnimalsCategory::factory()->create([
            'name' => $name = 'Salud y bienestar',
            'slug' => Str::slug($name),
        ]);
    }
}
