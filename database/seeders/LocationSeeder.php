<?php

namespace Database\Seeders;

use App\Models\Mapper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $locations = [
            [
                "location" => "New Hostel",
                "description" => "<strong>New Hostel</strong><p>Dormitory for both boys and girls <br> Number of floors: 6 <br> Number of rooms: 137</p>",
                "lat" => "5.5529",
                "lon" => "-0.20607",
                "icon" => "img/new_hostel.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "Old Hostel",
                "description" => "<strong>Old Hostel</strong><p>Dormitory for both boys and girls <br> Number of floors: 6 <br> Number of rooms: 96</p>",
                "lat" => "5.55241",
                "lon" => "-0.20604",
                "icon" => "img/old_hostel.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "New Sports Centre",
                "description" => "<strong>New Sports Centre</strong><p>Basketball and Tennis Field</p>",
                "lat" => "5.552064",
                "lon" => "-0.205929",
                "icon" => "img/sports_complex.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "SRC Complex",
                "description" => "<strong>SRC Complex</strong><p> <br> Number of floors: 4 <br> </p>",
                "lat" => "5.5532234",
                "lon" => "-0.2057945",
                "icon" => "img/complex.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "Mosque",
                "description" => "<strong>Mosque</strong>",
                "lat" => "5.5530805",
                "lon" => "-0.2057411",
                "icon" => "img/mosque.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "canteen",
                "description" => "<strong>Canteen block</strong><p> <br> Number of floors: 4</p>",
                "lat" => "5.5529024",
                "lon" => "-0.2057054",
                "icon" => "img/canteen.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "Learning Center",
                "description" => "<strong>Learning Center</strong><p><br>Learning area</p>",
                "lat" => "5.5534076",
                "lon" => "-0.2056497",
                "icon" => "img/learning_center.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "K-Block",
                "description" => "<strong>K-Block</strong><p><br>Number of floors: 3</p>",
                "lat" => "5.5535042",
                "lon" => "-0.2056766",
                "icon" => "img/learning_center.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "Auditorium",
                "description" => "<strong>Auditorium</strong><p><br> Number of floors: 1</p>",
                "lat" => "5.5534468",
                "lon" => "-0.2061917",
                "icon" => "img/audi.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "New IT Building",
                "description" => "<strong>New IT Building</strong><p> <br> Number of floors: 5</p>",
                "lat" => "5.5535541",
                "lon" => "-0.2063403",
                "icon" => "img/new_it.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "SLT Block",
                "description" => "<strong>SLT Block</strong> <br> Number of floors: 3</p>",
                "lat" => "5.5539506",
                "lon" => "-0.2055444",
                "icon" => "img/slt_block.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "B.Tech Block",
                "description" => "<strong>B. Tech Block</strong><p> <br> Number of floors: 4 </p>",
                "lat" => "5.5539524",
                "lon" => "-0.2059355",
                "icon" => "img/btech.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "Fashion Block",
                "description" => "<strong>Fashion Block</strong><p> <br> Number of floors: 4 </p>",
                "lat" => "5.5543386",
                "lon" => "-0.2070383",
                "icon" => "img/fashion.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "Lecturer/'s Office Building",
                "description" => " '<strong>Lecturer\'s Office Building</strong><p> <br> Number of floors: 5 <br></p>",
                "lat" => "5.5541473",
                "lon" => "-0.2068871",
                "icon" => "img/lectures office.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "Electrical/Electronic Engineering Block",
                "description" => "<strong>Electrical/Electrical Block</strong><p> <br> Number of floors: 6 <br></p>",
                "lat" => "5.5543892",
                "lon" => "-0.2063854",
                "icon" => "img/electric block.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "ATU Clinic",
                "description" => "<strong>ATU Click</strong><p> <br> Number of floors: 1 <br></p>",
                "lat" => "5.5546182",
                "lon" => "-0.2060331",
                "icon" => "img/atu_clinic.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "ATU Lodge",
                "description" => "<strong>ATU Lodge</strong><p></p>",
                "lat" => "5.5553985",
                "lon" => "-0.2057284",
                "icon" => "img/lodge.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "Administration",
                "description" => "<strong>Administration</strong><p> <br> Number of floors: 4</p>",
                "lat" => "5.553715",
                "lon" => "-0.2054408",
                "icon" => "img/admin.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ],
            [
                "location" => "N Block",
                "description" => "<strong>N Blockl</strong><p> <br> Number of floors: 4 </p>",
                "lat" => "5.5535106",
                "lon" => "-0.2050843",
                "icon" => "img/n block.jpg",
                "created_at" => "NULL",
                "updated_at" => "NULL"
            ]
        ];

        foreach ($locations as $locator) {
            Mapper::create([
            'location' => $locator['location'],
            'description' => $locator['description'],
            'lat' => $locator['lat'],
            'lon' => $locator['lon'],
            'icon' => $locator['icon']
            ]);
        }
    }
}
