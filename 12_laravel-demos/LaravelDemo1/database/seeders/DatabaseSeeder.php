<?php

namespace Database\Seeders;

use App\Models\Test;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // Test::truncate();
        // Test::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Call the TestSeeder
        $this->call(TestSeeder::class);
        // Generate 10 test records using the factory
        Test::factory()->count(10)->create();
    }
}

