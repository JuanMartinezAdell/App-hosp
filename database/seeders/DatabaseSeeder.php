<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Location;
use App\Models\Organization;
use App\Models\Position;
use App\Models\Services;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Location::factory(8)->create();
        Organization::factory(2)->create();
        Position::factory(5)->create();
        Services::factory(5)->create();
        Contact::factory(25)->create();
    }
}
