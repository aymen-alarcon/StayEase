<?php

namespace Database\Seeders;
use Database\Seeders\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                                
        Hotel::factory(30)->create();

    }
}
