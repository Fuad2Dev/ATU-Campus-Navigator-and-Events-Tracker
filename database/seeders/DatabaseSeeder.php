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

        User::factory()->create([
            'first_name' => 'Fuad',
            'last_name' => 'Muhammed',
            'email' => 'fuad2dev@gmail.com',
            'id' => '01193430D',
            'password' => Hash::make('123456789')
        ]);

        User::factory()->create([
            'first_name' => 'Fuad',
            'last_name' => 'Senpai',
            'email' => 'tchnvirus@gmail.com',
            'id' => '01193431D',
            'password' => Hash::make('123456789')
        ]);

        $this->call(RoleSeeder::class);

        $this->call(NotificationTypeSeeder::class);

        // $this->call(AssociationSeeder::class);
    }
}
