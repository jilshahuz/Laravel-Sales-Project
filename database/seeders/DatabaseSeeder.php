<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Lead;
use App\Models\Relation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     LeadsTableSeeder::class,
        //     RelationsTableSeeder::class,
        // ]);

        Lead::factory(100)->create();
        Relation::factory(100)->create();
    }
}
