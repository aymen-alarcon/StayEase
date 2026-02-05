<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $room = Room::create([
            'hotel_id' => 'requerd',
            'number' => 'requerd',
            'price_per_night' => 'requerd',
            'capacity' => 'requerd',
            'description' => 'requerd',
        ]);
        $room->tags()->attach([1, 2]);
        $room->properties()->attach([1, 3]);

    }
}
