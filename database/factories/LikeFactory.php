<?php

namespace Database\Factories;

use App\Models\Like;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    protected $model = Like::class;

    /**
     * Defina o estado padrão da fábrica.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'tweet_id' => Tweet::factory(),
        ];
    }
}
