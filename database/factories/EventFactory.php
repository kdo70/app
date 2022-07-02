<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        $title = $this->faker->text(50);
        return [
            'title' => $title,
            'preview_content' => $this->faker->paragraphs(rand(1, 15), true),
            'content' => $this->faker->paragraphs(rand(5, 15), true),
            'slug' => $title,
            'user_id' => User::query()->inRandomOrder()->first(),
        ];
    }
}
