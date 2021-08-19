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
       
            "name"=> "Seaweed",
            "species" => "Sea Creature",
            // "critter_img_path"=> "../CritterImg/SeaCreatures/NH-Icon-seaweed.png",
            "critter_image_path"=> "https://i.ibb.co/rQQgzx3/NH-Icon-seaweed.png",
            "location"=> "Diving",
            "price"=> "600",
            "months_available" => "October - July",
            "time_available"=> "All Day",
            "donated" => "Not Donated",
        ],      
        [
         
            "name"=> "Sea grapes",
            "species" => "Sea Creature",
            // "critter_image_path"=> "../CritterImg/SeaCreatures/NH-Icon-seagrapes.png",
            "critter_image_path"=> "https://i.ibb.co/tLGc5QB/NH-Icon-seagrapes.png",
            "location"=> "Diving",
            "price"=> "900",
            "months_available" => "June-September",
            "time_available"=> "All Day",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Sea Cucumber",
            "species" => "Sea Creature",
            // "critter_image_path"=> "../CritterImg/SeaCreatures/NH-Icon-seacucumber.png",
            "critter_image_path"=> "https://i.ibb.co/m994YV8/NH-Icon-seacucumber.png",
            "location"=> "Diving",
            "price"=> "500",
            "months_available" => "November - March",
            "time_available"=> "All Day",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Sea Pig",
            "species" => "Sea Creature",
            // "critter_image_path"=> "../CritterImg/SeaCreatures/NH-Icon-seapig.png",
            "critter_image_path"=> "https://i.ibb.co/LChPMV0/NH-Icon-seapig.png",
            "location"=> "Diving",
            "price"=> "10000",
            "months_available" => "November - February",
            "time_available"=> "16:00 - 09:00",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Sea Star",
            "species" => "Sea Creature",
            // "critter_image_path"=> "../CritterImg/SeaCreatures/NH-icon-seastar.png",
            "critter_image_path"=> "https://i.ibb.co/584bFN3/NH-Icon-seastar.png",
            "location"=> "Diving",
            "price"=> "500",
            "months_available" => "All Year",
            "time_available"=> "All Day",
            "donated" => "Not Donated",
        ],
        [
            "name"=> "Sea Urhin",
            "species" => "Sea Creature",
            // "critter_image_path"=> "../CritterImg/SeaCreatures/NH-Icon-seaurchin.png",
            "critter_image_path"=> "https://i.ibb.co/xj4c2D1/NH-Icon-seaurchin.png",
            "location"=> "Diving",
            "price"=> "1700",
            "months_available" => "May - September",
            "time_available"=> "All DaY",
            "donated" => "Not Donated",
        ],
        [
            "name"=> "Bitterling",
            "species" => "Fish",
            // "critter_img_path"=> "../CritterImg/Fish/NH-Icon-bitterling.png",
            "critter_image_path"=> "https://i.ibb.co/7vM4Cr6/NH-Icon-bitterling.png",
            "location"=> "River",
            "price"=> "900",
            "months_available" => "November - March",
            "time_available"=> "13:00 - 00:00",
            "donated" => "Not Donated",
        ],      
        [
            "name"=> "Pale Chub",
            "species" => "Fish",
            // "critter_image_path"=> "../CritterImg/Fish/NH-Icon-palechub.png",
            "critter_image_path"=> "https://i.ibb.co/v153B3W/NH-Icon-palechub.png",
            "location"=> "River",
            "price"=> "160",
            "months_available" => "Year Round",
            "time_available"=> "09:00 - 14:00",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Ranchu Goldfish",
            "species" => "Fish",
            // "critter_image_path"=> "../CritterImg/Fish/NH-Icon-ranchugoldfish.png",
            "critter_image_path"=> "https://i.ibb.co/NKhqRXc/NH-Icon-catfish.png",
            "location"=> "Pond",
            "price"=> "4500",
            "months_available" => "Year Round",
            "time_available"=> "09:00 - 16:00",
            "donated" => "Not Donated",
        
        ],      
        [
            "name"=> "Catfish",
            "species" => "Fish",
            // "critter_image_path"=> "../CritterImg/Fish/NH-Icon-catfish.png",
            "critter_image_path"=> "https://i.ibb.co/NKhqRXc/NH-Icon-catfish.png",
            "location"=> "Pond",
            "price"=> "800",
            "months_available" => "May - October",
            "time_available"=> "16:00 - 09:00",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Sea Butterfly",
            "species" => "Fish",
            // "critter_image_path"=> "../CritterImg/Fish/NH-Icon-seabutterfly.png",
            "critter_image_path"=> "https://i.ibb.co/hmcB3cG/NH-Icon-seabutterfly.png",
            "location"=> "Sea",
            "price"=> "1000",
            "months_available" => "December - March",
            "time_available"=> "All Day",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Sea Horse",
            "species" => "Fish",
            // "critter_image_path"=> "../CritterImg/Fish/NH-Icon-seahorse.png",
            "critter_image_path"=> "https://i.ibb.co/8YVBs33/NH-Icon-seahorse.png",
            "location"=> "Diving",
            "price"=> "500",
            "months_available" => "April - November",
            "time_available"=> "All Day",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Common Butterfly",
            "species" => "Bug",
            // "critter_img_path"=> "../CritterImg/Bugs/NH-Icon-commonbutterfly.png",
            "critter_image_path"=> "https://i.ibb.co/0qFH5YR/NH-Icon-commonbutterfly.png",
            "location"=> "Flying",
            "price"=> "160",
            "months_available" => "September - June",
            "time_available"=> "04:00 - 19:00",
            "donated" => "Not Donated",
        ],      
        [
            "name"=> "Monarch Butterfly",
            "species" => "Bug",
            // "critter_image_path"=> "../CritterImg/Bugs/NH-Icon-monarchbutterfly.png",
            "critter_image_path"=> "https://i.ibb.co/fSryLq4/NH-Icon-monarchbutterfly.png",
            "location"=> "Flying",
            "price"=> "140",
            "months_available" => "September - November",
            "time_available"=> "04:00 - 17:00",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Cricket",
            "species" => "Bug",
            // "critter_image_path"=> "../CritterImg/Bugs/NH-Icon-molecricket.png",
            "critter_image_path"=> "https://i.ibb.co/df9Hjtc/NH-Icon-molecricket.png",
            "location"=> "On Ground",
            "price"=> "130",
            "months_available" => "September - November",
            "time_available"=> "17:00 - 08:00",
            "donated" => "Not Donated",
        
        ],      
        [
            "name"=> "Mantis",
            "species" => "Bug",
            // "critter_image_path"=> "../CritterImg/Bugs/NH-Icon-mantis.png",
            "critter_image_path"=> "https://i.ibb.co/dg13VKz/NH-Icon-pillbug.png",
            "location"=> "On Ground",
            "price"=> "800",
            "months_available" => "March - November",
            "time_available"=> "08:00 - 17:00",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Pill Bug",
            "species" => "Bug",            
            // "critter_image_path"=> "../CritterImg/Bugs/NH-Icon-pillbug.png",
            "critter_image_path"=> "https://i.ibb.co/dg13VKz/NH-Icon-pillbug.png",
            "location"=> "Hit Rocks",
            "price"=> "250",
            "months_available" => "September - June",
            "time_available"=> "11:00 - 16:00",
            "donated" => "Not Donated",
        
        ],
        [
            "name"=> "Ant",
            "species" => "Bug",
            // "critter_image_path"=> "../CritterImg/Bugs/NH-Icon-ant.png",
            "critter_image_path"=> "https://i.ibb.co/X3Y01qr/NH-Icon-ant.png",
            "location"=> "On Rotten Food",
            "price"=> "80",
            "months_available" => "All Year",
            "time_available"=> "All Day",
            "donated" => "Not Donated",
        
        ]

    ]);
    }
}
