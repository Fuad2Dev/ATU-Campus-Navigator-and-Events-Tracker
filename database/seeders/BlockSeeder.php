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
            'lat' => '5.5535042',
            'lon' => '-0.2056766',
            'icon' => 'img/k block.jpg',
            'number_of_levels' => '3',
            'type' => '1',
          ],
          1 => [
            'id' => '2',
            'name' => 'N-BLOCK',
            'lat' => '5.5535106',
            'lon' => '-0.2050843',
            'icon' => 'img/n block.jpg',
            'number_of_levels' => '3',
            'type' => '1',
          ],
          2 => [
            'id' => '3',
            'name' => 'SLT BLOCK',
            'lat' => '5.5539506',
            'lon' => '-0.2055444',
            'icon' => 'img/slt_block.jpg',
            'number_of_levels' => '3',
            'type' => '1',
          ],
          3 => [
            'id' => '4',
            'name' => 'BTECH',
            'lat' => '5.5539524',
            'lon' => '-0.2059355',
            'icon' => 'img/btech.jpg',
            'number_of_levels' => '4',
            'type' => '1',
          ],
          4 => [
            'id' => '5',
            'name' => 'LEARNING CENTER',
            'lat' => '5.5535042',
            'lon' => '-0.2056445',
            'icon' => 'img/learning_center.jpg',
            'number_of_levels' => '1',
            'type' => '2',
          ],
          5 => [
            'id' => '6',
            'name' => 'WASHROOM',
            'lat' => '5.5534339',
            'lon' => '-0.2054157',
            'icon' => 'img/washroom.jpg',
            'number_of_levels' => '1',
            'type' => '1',
          ],
          6 => [
            'id' => '7',
            'name' => 'MOSQUE',
            'lat' => '5.5530805',
            'lon' => '-0.2057411',
            'icon' => 'img/mosque.jpg',
            'number_of_levels' => '1',
            'type' => '1',
          ],
          7 => [
            'id' => '8',
            'name' => 'NEW HOSTEL',
            'lat' => '5.5529',
            'lon' => '-0.20607',
            'icon' => 'img/new_hostel.jpg',
            'number_of_levels' => '6',
            'type' => '1',
          ],
          8 => [
            'id' => '9',
            'name' => 'OLD HOSTEL',
            'lat' => '5.55241',
            'lon' => '-0.20604',
            'icon' => 'img/old_hostel.jpg',
            'number_of_levels' => '6',
            'type' => '1',
          ],
          9 => [
            'id' => '10',
            'name' => 'sport complex',
            'lat' => '5.552064',
            'lon' => '-0.205929',
            'icon' => 'img/sports_complex.jpg',
            'number_of_levels' => '1',
            'type' => '1',
          ],
          10 => [
            'id' => '11',
            'name' => 'SRC COMPLEX',
            'lat' => '5.5532234',
            'lon' => '-0.2057945',
            'icon' => 'img/complex.jpg',
            'number_of_levels' => '4',
            'type' => '2',
          ],
          11 => [
            'id' => '12',
            'name' => 'CANTEEN',
            'lat' => '5.5529024',
            'lon' => '-0.2057054',
            'icon' => 'img/canteen.jpg',
            'number_of_levels' => '4',
            'type' => '1',
          ],
          12 => [
            'id' => '13',
            'name' => 'AUDITORIUM',
            'lat' => '5.5534468',
            'lon' => '-0.2061917',
            'icon' => 'img/audi.jpg',
            'number_of_levels' => '1',
            'type' => '2',
          ],
          13 => [
            'id' => '14',
            'name' => 'NEW IT BUILDING',
            'lat' => '5.5535541',
            'lon' => '-0.2063403',
            'icon' => 'img/new_it.jpg',
            'number_of_levels' => '4',
            'type' => '1',
          ],
        ];

        foreach ($blocks as $key => $block) {
          Block::create($block);
        }
    }
}
