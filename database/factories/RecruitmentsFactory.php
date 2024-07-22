<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recruitments;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recruitments>
 */
class RecruitmentsFactory extends Factory
{
    protected $model = Recruitments::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'position' => $this->faker->jobTitle,
            'description' => $this->faker->text,
            'requirements' => $this->faker->sentence,
            'publishedDate' => $this->faker->date,
            'contactInfo' => $this->faker->email,
            'numsOfRecruits' => $this->faker->numberBetween(1, 10),
            'workPlace' => $this->faker->city,
            'dateStartWork' => $this->faker->date,
            'benefits' => $this->faker->sentence,
            'age' => $this->faker->numberBetween(22, 60),
            'academicLevel' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
            'request_Doc' => $this->faker->sentence,
        ];
    }
}
