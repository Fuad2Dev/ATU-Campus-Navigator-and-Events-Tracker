<?php

namespace Database\Seeders;

use App\Models\PlaceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            0 => [
              'id' => '1',
              'name' => 'CLASS',
            ],
            1 => [
              'id' => '2',
              'name' => 'OFFICE',
            ],
            2 => [
              'id' => '3',
              'name' => 'DEPARTMENT',
            ],
            3 => [
              'id' => '4',
              'name' => 'LADIES',
            ],
            4 => [
              'id' => '5',
              'name' => 'GENTS',
            ],
            5 => [
              'id' => '7',
              'name' => 'LADIES/GENTS',
            ],
            6 => [
              'id' => '8',
              'name' => 'LIBRARY',
            ],
            7 => [
              'id' => '9',
              'name' => 'LAB',
            ],
        ];

        foreach ($types as $key => $type) {
          PlaceType::create($type);
        }
    }
}
