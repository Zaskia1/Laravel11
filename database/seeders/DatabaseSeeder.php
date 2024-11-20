<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Panggil seeders lainnya
        $this->call([
            DepartmentSeeder::class, // Memanggil DepartmentSeeder
            GradeSeeder::class,      // Memanggil GradeSeeder
            StudentSeeder::class,    // Memanggil StudentSeeder
        ]);
    }
}
