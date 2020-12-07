<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'content' => $this->faker->randomHtml(),
            'slug' => $this->faker->slug,
            'image_thumbmail' => $this->faker->imageUrl,
            'author_id' => User::factory(),
            'published_at' => $this->faker->date,
        ];
    }
}
