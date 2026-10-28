<?php

namespace Database\Seeders;

use App\Models\campaign;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProspectSeeder::class,
        ]);
        campaign::factory(10)->create();
    }
}