<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Event;
use App\Models\User;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    protected $model = Rating::class;

    public function definition(): array
    {
        $event = rand(0, 1);
        if ($event) {
            $model = Event::query()->inRandomOrder()->first();
        } else {
            $model = Comment::query()->inRandomOrder()->first();
        }
        return [
            'value' => rand(0, 1),
            'from_id' => User::query()->inRandomOrder()->select('id')->whereNot('id', '=', $model->user_id)->first(),
            'to_id' => $model->user_id,
            'object_type' => get_class($model),
            'object_id' => $model,
        ];
    }
}
