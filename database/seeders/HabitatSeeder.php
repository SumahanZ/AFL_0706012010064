<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabitatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitats')->insert([
            'code' => 'RF',
            'name' => 'Rain Forest',
            'humidity' => 'WET',
            'min_size' => '1000',
            'max_size' => '10000',
            'description' => "A rain forest is simply an area of tall, mostly evergreen trees and a high amount of rainfall. ... A rainforest is an area of tall, mostly evergreen trees and a high amount of rainfall. Rainforests are Earth's oldest living ecosystems, with some surviving in their present form for at least 70 million years."
        ]);

        DB::table('habitats')->insert([
            'code' => 'POL',
            'name' => 'Polar',
            'humidity' => 'DRY',
            'min_size' => '3000',
            'max_size' => '50000',
            'description' => "The South Pole is the southernmost point on the Earth. ... From the South Pole, all directions are north. Its latitude is 90 degrees south, and all lines of longitude meet there (as well as at the North Pole, on the opposite end of the Earth). The South Pole is located on Antarctica, one of the Earth's seven continents."
        ]);

        DB::table('habitats')->insert([
            'code' => 'WET',
            'name' => 'Wetlands',
            'humidity' => 'WET',
            'min_size' => '2000',
            'max_size' => '20000',
            'description' => "A wetland is a place where the land is covered by water, either salt, fresh or somewhere in between. Marshes and ponds, the edge of a lake or ocean, the delta at the mouth of a river, low-lying areas that frequently flood—all of these are wetlands."
        ]);

        DB::table('habitats')->insert([
            'code' => 'DES',
            'name' => 'Desert',
            'humidity' => 'DRY',
            'min_size' => '4000',
            'max_size' => '30000',
            'description' => "A desert is a region of land that is very dry because it receives low amounts of precipitation (usually in the form of rain, but it may be snow, mist or fog), often has little coverage by plants, and in which streams dry up unless they are supplied by water from outside the area."
        ]);

        DB::table('habitats')->insert([
            'code' => 'MAR',
            'name' => 'Marine',
            'humidity' => 'WET',
            'min_size' => '5000',
            'max_size' => '60000',
            'description' => "Marine habitats include oceans and seas, which both have saltwater. Marine creatures also live in estuaries – where rivers and oceans meet and the water is still salty. ... Oceans and seas cover over 70% of the Earth's surface. There are five oceans across the planet, and over 100 different seas."
        ]);

        DB::table('habitats')->insert([
            'code' => 'GRS',
            'name' => 'Grassland',
            'humidity' => 'DRY',
            'min_size' => '1000',
            'max_size' => '30000',
            'description' => "Grassland biomes consist of large open areas of grass. Trees can be present, but they are infrequent low rainfall, wildland fires, and grazing by animals are three factors that maintain grasslands. In grassland regions, the climate is ideal for the growth of grasses only."
        ]);
    }
}
