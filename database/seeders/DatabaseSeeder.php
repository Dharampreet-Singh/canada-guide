<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        \App\Models\Housing::factory(5)->create();

        \App\Models\Questions::factory(10)->create();

        \App\Models\Answers::factory(10)->create();

        \App\Models\QuestionsAnswers::factory(10)->create(); // not working because of foreign key data concerns

        \App\Models\Blogs::factory(10)->create();

        \App\Models\Comments::factory(10)->create();

        \App\Models\GroceryStores::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(AdminSeeder::class);
        $this->call(TouristPlacesSeeder::class);
    }
}
