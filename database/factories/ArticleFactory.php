<?php

namespace Database\Factories;

use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(10),
            'author' => rand(0,1)  ? fake()->name : null ,
            'brief' => fake()->text(),
            'body' => fake()->text(),
            'created_at' => Carbon::now(),
        ];
    }
}
