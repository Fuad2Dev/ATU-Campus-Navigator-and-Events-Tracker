<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
