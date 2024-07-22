<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doc;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doc>
 */
class DocFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Doc::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'file_path' => $this->faker->filePath(),
        ];
    }
}
