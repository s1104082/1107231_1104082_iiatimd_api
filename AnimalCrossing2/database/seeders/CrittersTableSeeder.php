<?php

namespace Database\Seeders;

use DB;
use Str;
use Hash;
use App\Models\Critters;


use Illuminate\Database\Seeder;

class CrittersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Critters::insert([[
            "species"=> "Fish",
            "name"=> "Bitterling",
            "critter_img_path"=> "../CritterImg/Fish/NH-Icon-bitterling.png",
            "location"=> "River",
            "price"=> "900",
            "months_available" => "November till March",
            "time_available"=> "13:00 - 00:00",
            "donated" => "Donated",
        ],      
        [
            "species"=> "Bug",
            "name"=> "Jewel Beetle",
            "critter_image_path"=> "../CritterImg/Bugs/NH-Icon-jewelbeetle.png",
            "location"=> "On Trees",
            "price"=> "2400",
            "months_available" => "June till November",
            "time_available"=> "13:00 - 00",
            "donated" => "Not Donated",
        
        ],
        [
            "species"=> "Sea Creature",
            "name"=> "Sea Cucumber",
            "critter_image_path"=> "../CritterImg/Bugs/NH-Icon-SeaCumber.png",
            "location"=> "Diving",
            "price"=> "500",
            "months_available" => "November till March",
            "time_available"=> "13:00 - 00:00",
            "donated" => "Donated",
        
        ]
    ]);
    }
}
