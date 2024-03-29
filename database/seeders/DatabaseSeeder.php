<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Aactories\EstateFactory;
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
            RoleAndPermissionSeeder::class,
            // TransactionTypeSeeder::class,
            // PropertyTypeSeeder::class,
            // AmenitySeeder::class,
            // UserSeeder::class,
            // PropertySeeder::class,
            AdminSeeder::class
        ]);
    }
}
