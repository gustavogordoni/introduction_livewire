<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Like;

class LikeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Like::factory(10)->create();
    }
}
