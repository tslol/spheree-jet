<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Locations;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
         {
             $locations = [
                 ['city' => 'Columbus', 'state' => 'OH'],
                 ['city' => 'Cleveland', 'state' => 'OH'],
                 ['city' => 'Cincinnati', 'state' => 'OH'],
                 ['city' => 'Toledo', 'state' => 'OH'],
                 ['city' => 'Akron', 'state' => 'OH'],
                 ['city' => 'Dayton', 'state' => 'OH'],
                 ['city' => 'Youngstown', 'state' => 'OH'],
                 ['city' => 'Canton', 'state' => 'OH'],
                 ['city' => 'Lima', 'state' => 'OH'],
                 ['city' => 'Mansfield', 'state' => 'OH'],
             ];

             $modifiedLocations = array_map(function ($location) {
                 $location['name'] = $location['city'] . ', ' . $location['state'];
                 return $location;
             }, $locations);

             foreach ($modifiedLocations as $location) {
                 Locations::create($location);
             }
         }
}
