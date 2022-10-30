<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blocks = [
            0 => [
              'id' => '1',
              'name' => 'K-BLOCK',
              'lat' => '5.5533114',
              'lon' => '-0.205707',
              'icon' => 'img/k block.jpg',
              'number_of_levels' => '3',
            ],
            1 => [
              'id' => '2',
              'name' => 'N-BLOCK',
              'lat' => '5.5687858',
              'lon' => '-0.2797772',
              'icon' => 'img/n block.jpg',
              'number_of_levels' => '3',
            ],
            2 => [
              'id' => '3',
              'name' => 'SLT BLOCK',
              'lat' => '5.5539506',
              'lon' => '-0.2055444',
              'icon' => 'img/slt_block.jpg',
              'number_of_levels' => '3',
            ],
            3 => [
              'id' => '4',
              'name' => 'BTECH BLOCK',
              'lat' => '5.5539524',
              'lon' => '-0.2059355',
              'icon' => 'img/btech.jpg',
              'number_of_levels' => '4',
            ],
        ];

        foreach ($blocks as $key => $block) {
          Block::create($block);
        }
    }
}
