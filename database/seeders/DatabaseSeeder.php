<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\Event;
use App\Models\Pack;
use App\Models\Paid;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(10)->create();
        Event::factory(10)->create();
        Pack::factory(10)->create();
        Paid::factory(10)->create();
        Bill::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
