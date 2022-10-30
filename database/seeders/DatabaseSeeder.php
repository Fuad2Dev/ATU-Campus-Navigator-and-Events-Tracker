<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        

        $this->call(UserSeeder::class);

        $this->call(RoleSeeder::class);

        $this->call(NotificationTypeSeeder::class);

        $this->call(InviteTypeSeeder::class);

        $this->call(LocationSeeder::class);

        $this->call(BlockSeeder::class);

        $this->call(PlaceSeeder::class);

        $this->call(PlaceTypeSeeder::class);
    }
}
