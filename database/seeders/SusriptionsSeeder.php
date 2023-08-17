<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\{Suscription, User};

class SusriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert([
            'name' => 'Default',
            'price_month' => 0,
            'price_year' => 0
        ]);

        DB::table('subscriptions')->insert([
            'name' => 'Gran Danes',
            'price_month' => 0,
            'price_year' => 0,
        ]);

        DB::table('subscriptions')->insert([
            'name' => 'Akita',
            'price_month' => 0,
            'price_year' => 0
        ]);

        DB::table('subscriptions')->insert([
            'name' => 'Yorkie',
            'price_month' => 0,
            'price_year' => 55000
        ]);
    }
}
