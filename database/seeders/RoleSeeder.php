<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create([
            'id' => 1,
            'description' => 'admin'
        ]);

        Role::factory()->create([
            'id' => 2,
            'description' => 'co-admin'
        ]);

        Role::factory()->create([
            'id' => 3,
            'description' => 'member'
        ]);

        Role::factory()->create([
            'id' => 4,
            'description' => 'pending'
        ]);
    }
}
