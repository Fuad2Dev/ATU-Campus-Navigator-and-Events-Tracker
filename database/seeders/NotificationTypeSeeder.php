<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NotificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'description' => 'pending request'
        ]);
        NotificationType::factory()->create([
            'id' => 2,
            'description' => 'request accepted'
        ]);
        NotificationType::factory()->create([
            'id' => 3,
            'description' => 'request declined'
        ]);
        NotificationType::factory()->create([
            'id' => 4,
            'description' => 'invite to join group'
        ]);
        NotificationType::factory()->create([
            'id' => 5,
            'description' => 'invite accepted'
        ]);
        NotificationType::factory()->create([
            'id' => 6,
            'description' => 'invite declined'
        ]);
        NotificationType::factory()->create([
            'id' => 7,
            'description' => 'promoted'
        ]);
        NotificationType::factory()->create([
            'id' => 8,
            'description' => 'demoted'
        ]);
        NotificationType::factory()->create([
            'id' => 9,
            'description' => 'kicked out of association'
        ]);
        NotificationType::factory()->create([
            'id' => 10,
            'description' => 'asoociation deleted'
        ]);
    }
}
