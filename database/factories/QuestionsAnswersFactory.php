<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionsAnswers>
 */
class QuestionsAnswersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'question_id' => fake()->numberBetween(1, 10),
            'answer_id' => fake()->numberBetween(1, 10),
        ];
    }
}
