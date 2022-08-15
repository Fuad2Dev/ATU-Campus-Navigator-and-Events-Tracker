<?php

namespace Database\Factories;

use App\Models\Association;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Association>
 */
class AssociationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(3),
            'id' => $this->generateUniqueId(),
            'description' => fake()->sentence(3)
        ];
    }

    public function generateUniqueId()
    {
        do {
            $code = Str::random(6);
        } while (Association::where("id", "=", $code)->first());
  
        return $code;
    }
}
