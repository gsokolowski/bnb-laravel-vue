<?php

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
        $this->call(BookablesTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
    }
}

// run this command on laradoc container to re-seed database
//php artisan migrate:refresh --seed
