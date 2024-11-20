<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    public function run()
    {
        for ($level = 10; $level <= 12; $level++) {
            for ($section = 1; $section <= 2; $section++) {
                Grade::factory()->create([
                    'name' => "{$level} PPLG {$section}",
                    'department_id' => 1,
                ]);
            }
        }

        for ($level = 10; $level <= 12; $level++) {
            for ($section = 1; $section <= 5; $section++) {
                if($section > 3){
                    Grade::factory()->create([
                        'name' => "{$level} Anim {$section}",
                        'department_id' => 3,
                    ]);
                } else{
                    Grade::factory()->create([
                        'name' => "{$level} Anim {$section}",
                        'department_id' => 2,
                    ]);
                }
            }
        }

        for ($level = 10; $level <= 12; $level++) {
            for ($section = 1; $section <= 5; $section++) {
                if ($section > 2){
                    Grade::factory()->create([
                        'name' => "{$level} DKV {$section}",
                        'department_id' => 5,
                    ]);
                } else{
                    Grade::factory()->create([
                        'name' => "{$level} DKV {$section}",
                        'department_id' => 4,
                    ]);
                }

            }
        } // Membuat 35 data grade
    }
}
