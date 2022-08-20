<?php

namespace Database\Seeders;

use App\Models\NotificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotificationType::factory()->create([
            'id' => 1,
            'description' => 'request to join group'
        ]);
        NotificationType::factory()->create([
            'id' => 2,
            'description' => 'invite to join group'
        ]);
        NotificationType::factory()->create([
            'id' => 3,
            'description' => 'kicked out from group'
        ]);
        NotificationType::factory()->create([
            'id' => 4,
            'description' => 'promoted'
        ]);
        NotificationType::factory()->create([
            'id' => 5,
            'description' => 'demoted'
        ]);
        NotificationType::factory()->create([
            'id' => 6,
            'description' => 'event rescheduled'
        ]);
        NotificationType::factory()->create([
            'id' => 7,
            'description' => 'event location updated'
        ]);
        NotificationType::factory()->create([
            'id' => 8,
            'description' => 'event cancelled'
        ]);
        NotificationType::factory()->create([
            'id' => 9,
            'description' => 'event invitation cancelled'
        ]);
    }
}
