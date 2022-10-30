<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
  /**
   * Run the placebase seeds.
   *
   * @return void
   */
  public function run()
  {
    $places = [
      0 => [
        'block_id' => '1',
        'level' => '1',
        'name' => 'KG1',
        'position' => '1',
        'place_type_id' => '1',
      ],
      1 => [
        'name' => 'DEAN OF FACULTY OF BUSINESS',
        'position' => '2',
        'place_type_id' => '2',
      ],
      2 => [
        'name' => 'KG5',
        'position' => '3',
        'place_type_id' => '1',
      ],
      3 => [
        'name' => 'HOD OF MARKETING',
        'position' => '4',
        'place_type_id' => '2',
      ],
      4 => [
        'name' => 'KG9',
        'position' => '5',
        'place_type_id' => '1',
      ],
      5 => [
        'name' => 'WASHROOM',
        'position' => '6',
        'place_type_id' => '4',
      ],
      6 => [
        'level' => '2',
        'name' => 'COMPUTER SCIENCE DEPARTMENT',
        'position' => '1',
        'place_type_id' => '3',
      ],
      7 => [
        'name' => 'KF6',
        'position' => '2',
        'place_type_id' => '1',
      ],
      8 => [
        'name' => 'HOD OF MATH. AND STATS',
        'position' => '3',
        'place_type_id' => '2',
      ],
      9 => [
        'name' => 'KF9',
        'position' => '4',
        'place_type_id' => '1',
      ],
      10 => [
        'name' => 'WASHROOM',
        'position' => '5',
        'place_type_id' => '5',
      ],
      11 => [
        'level' => '3',
        'name' => 'KT1',
        'position' => '1',
        'place_type_id' => '1',
      ],
      12 => [
        'name' => 'KT2',
        'position' => '2',
        'place_type_id' => '1',
      ],
      13 => [
        'name' => 'KT3',
        'position' => '3',
        'place_type_id' => '1',
      ],
      14 => [
        'block_id' => '2',
        'level' => '1',
        'name' => 'NG6',
        'position' => '1',
        'place_type_id' => '1',
      ],
      15 => [
        'name' => 'DEAN OF STUDENTS AFFAIRS',
        'position' => '2',
        'place_type_id' => '2',
      ],
      16 => [
        'name' => 'NG5',
        'position' => '3',
        'place_type_id' => '1',
      ],
      17 => [
        'name' => 'NG4',
        'position' => '4',
        'place_type_id' => '4',
      ],
      18 => [
        'name' => 'NG3',
        'position' => '5',
        'place_type_id' => '3',
      ],
      19 => [
        'name' => 'NG2',
        'position' => '6',
        'place_type_id' => '1',
      ],
      20 => [
        'name' => 'WASHROOM',
        'position' => '7',
        'place_type_id' => '1',
      ],
      21 => [
        'name' => 'NG1',
        'position' => '8',
        'place_type_id' => '1',
      ],
      22 => [
        'level' => '2',
        'name' => 'NF6',
        'position' => '1',
        'place_type_id' => '1',
      ],
      23 => [
        'name' => 'OFFICE',
        'position' => '2',
        'place_type_id' => '2',
      ],
      24 => [
        'name' => 'NF5',
        'position' => '3',
        'place_type_id' => '1',
      ],
      25 => [
        'name' => 'NF4',
        'position' => '4',
        'place_type_id' => '1',
      ],
      26 => [
        'name' => 'NF3',
        'position' => '5',
        'place_type_id' => '1',
      ],
      27 => [
        'name' => 'NF2',
        'position' => '6',
        'place_type_id' => '1',
      ],
      28 => [
        'name' => 'WASHROOM',
        'position' => '7',
        'place_type_id' => '7',
      ],
      29 => [
        'name' => 'NF1',
        'position' => '8',
        'place_type_id' => '1',
      ],
      30 => [
        'level' => '3',
        'name' => 'LIBRARY',
        'position' => '1',
        'place_type_id' => '8',
      ],
      31 => [
        'block_id' => '3',
        'level' => '1',
        'name' => 'ANALYTICAL CHEMISTRY LAB 1',
        'position' => '1',
        'place_type_id' => '9',
      ],
      32 => [
        'name' => 'ANNEX EG 006',
        'position' => '2',
        'place_type_id' => '1',
      ],
      33 => [
        'name' => 'PHYSICS LAB EG 005',
        'position' => '3',
        'place_type_id' => '9',
      ],
      34 => [
        'name' => 'BIOCHEMISTRY LAB 1',
        'position' => '4',
        'place_type_id' => '9',
      ],
      35 => [
        'name' => 'MICROBIOLOGY LAB 1',
        'position' => '5',
        'place_type_id' => '9',
      ],
      36 => [
        'level' => '2',
        'name' => 'MICROBIOLOGY LAB 2',
        'position' => '1',
        'place_type_id' => '9',
      ],
      37 => [
        'name' => ' BIOCHEMISTRY LAB 2 EF 002',
        'position' => '2',
        'place_type_id' => '9',
      ],
      38 => [
        'name' => 'PHYSICS/INSTRUMENTATION LAB 2',
        'position' => '3',
        'place_type_id' => '9',
      ],
      39 => [
        'name' => 'ANALYTICAL CHEMISTRY LAB 2',
        'position' => '4',
        'place_type_id' => '9',
      ],
      40 => [
        'level' => '3',
        'name' => 'ET 1',
        'position' => '1',
        'place_type_id' => '1',
      ],
      41 => [
        'name' => 'ET 2',
        'position' => '2',
        'place_type_id' => '1',
      ],
      42 => [
        'name' => 'ET 4',
        'position' => '3',
        'place_type_id' => '1',
      ],
      43 => [
        'name' => 'ET 5',
        'position' => '4',
        'place_type_id' => '1',
      ],
      44 => [
        'name' => 'WASHROOM',
        'position' => '5',
        'place_type_id' => '7',
      ],
      45 => [
        'block_id' => '4',
        'level' => '1',
        'name' => 'OFFICE 030',
        'position' => '1',
        'place_type_id' => '2',
      ],
      46 => [
        'name' => 'OFFICE 031',
        'position' => '2',
        'place_type_id' => '2',
      ],
      47 => [
        'name' => 'OFFICE 032',
        'position' => '3',
        'place_type_id' => '2',
      ],
      48 => [
        'name' => 'OFFICE 033',
        'position' => '4',
        'place_type_id' => '2',
      ],
      49 => [
        'level' => '2',
        'name' => 'OFFICE 023',
        'position' => '1',
        'place_type_id' => '2',
      ],
      50 => [
        'name' => 'BTECH 24/25',
        'position' => '2',
        'place_type_id' => '1',
      ],
      51 => [
        'name' => 'OFFICE 026',
        'position' => '3',
        'place_type_id' => '2',
      ],
      52 => [
        'name' => '0FFICE 025',
        'position' => '4',
        'place_type_id' => '2',
      ],
      53 => [
        'name' => 'BTECH 28',
        'position' => '5',
        'place_type_id' => '1',
      ],
      54 => [
        'name' => 'BTECH 29',
        'position' => '6',
        'place_type_id' => '1',
      ],
      55 => [
        'level' => '3',
        'name' => 'OFFICE 022',
        'position' => '1',
        'place_type_id' => '2',
      ],
      56 => [
        'name' => 'BTECH LARGE',
        'position' => '2',
        'place_type_id' => '9',
      ],
      57 => [
        'name' => 'OFFICE 019',
        'position' => '3',
        'place_type_id' => '2',
      ],
      58 => [
        'name' => '0FFICE 018',
        'position' => '4',
        'place_type_id' => '2',
      ],
      59 => [
        'name' => 'OFFICE 017',
        'position' => '5',
        'place_type_id' => '2',
      ],
      60 => [
        'name' => 'WASHROOM',
        'position' => '6',
        'place_type_id' => '7',
      ],
      61 => [
        'level' => '4',
        'name' => 'LIBRARY',
        'position' => '1',
        'place_type_id' => '8',
      ],
      62 => [
        'name' => 'RESEARCH CENTER',
        'position' => '2',
        'place_type_id' => '9',
      ],
      63 => [
        'name' => 'WASHROOM',
        'position' => '3',
        'place_type_id' => '7',
      ],
    ];

    foreach ($places as $key => $place) {
      // if level and block_id is unset, it equals the last set value
      if (isset($place['level']))
        $level = $place['level'];
      if (isset($place['block_id']))
        $block_id = $place['block_id'];

      $place['level'] = $level;
      $place['block_id'] = $block_id;

      Place::create($place);
    }
  }
}
