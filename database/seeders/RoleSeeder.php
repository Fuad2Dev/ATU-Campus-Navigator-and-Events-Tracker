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
            'description' => 'admin'
        ]);

        Role::factory()->create([
            'description' => 'co-admin'
        ]);

        Role::factory()->create([
            'description' => 'member'
        ]);

        Role::factory()->create([
            'description' => 'pending'
        ]);
    }
}
