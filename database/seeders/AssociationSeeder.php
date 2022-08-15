<?php

namespace Database\Seeders;

use App\Models\Association;
use App\Models\UserAssociation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Association::factory(6)->create();

        $associations = Association::all();

        foreach ($associations as $association) {

            // $association->;
            
            // UserAssociation::factory()->create([
            //     'user_id' => '01193430D',
            //     'association_id' => $association->id,
            //     'role_id' => 1
            // ]);
        }
    }
}
