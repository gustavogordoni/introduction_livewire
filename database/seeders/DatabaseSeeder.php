<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tweet;
use App\Models\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {       
        $this->call([
            UserSeed::class,
            TweetSeed::class,
            LikeSeed::class
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@email.com',
            'password' => bcrypt('password')
        ]);
    }
}
