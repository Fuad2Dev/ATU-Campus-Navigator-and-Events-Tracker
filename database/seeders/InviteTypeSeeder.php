<?php

namespace Database\Seeders;

use App\Models\InviteType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InviteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InviteType::factory()->create([
            'id' => 1,
            'description' => 'everyone'
        ]);
        InviteType::factory()->create([
            'id' => 2,
            'description' => 'members only'
        ]);
    }
}
