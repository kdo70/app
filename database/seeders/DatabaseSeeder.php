<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->create();
        Event::factory()->hasComments(50)->count(100)->create();
        Rating::factory()->count(1000)->create();
        $this->call([
            FormHandBookSeeder::class,
        ]);
    }
}
