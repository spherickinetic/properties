<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\Room;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::factory()->count(5)->create()->each(function ($property) {

            for($i = 1; $i <= 5; $i++){
                $room = Room::factory()->make();
                $property->rooms()->save($room);
            }
        });
    }
}
