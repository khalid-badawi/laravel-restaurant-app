<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Review;
use App\Models\Articles;
use App\Models\MenuItem;
use App\Models\RestaurantTable;
use Illuminate\Database\Seeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\MenuItemSeeder;
use Database\Seeders\RestaurantTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        MenuItem::factory()->count(10)->create();
        Review::factory()->count(20)->create([
            'user_id' => User::inRandomOrder()->first()->id,
        ]);

        Articles::factory()->count(30)->create();

        RestaurantTable::factory()->count(10)->create();



    }
}
