<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
        ]);
        \App\Models\User::factory(30)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\Lot::factory(50)->create();
    }
}
