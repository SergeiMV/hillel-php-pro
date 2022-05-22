<?php

namespace Database\Factories;

use App\Models\Cards;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    public function definition()
    {
        return [
            'text' => $this->faker->realText(10),
            'card_id' => Cards::factory(),
            'user_id' => Users::factory(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => now()
        ];
    }
}
