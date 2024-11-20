<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Grade;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        $grade = $this->faker->numberBetween(1, 36);

        return [
            'name' => $this->faker->name(),
            'grade_id' => $grade,
            'department_id' =>
                $grade <= 6 ? 1 :
                (($grade - 7) % 5 < 3 && $grade <= 21 ? 2 :
                (($grade - 7) % 5 > 2 && $grade <= 21 ? 3 :
                (($grade - 21) % 5 > 2 ? 4 : 5))),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
        ];
    }
}
