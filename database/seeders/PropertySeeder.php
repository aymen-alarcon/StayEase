<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use Illuminate\Support\icon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;




class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $propertyies = ['Wi-Fi', 'Climatisation', 'Vue sur mer', 'Piscine', 'Balcon'];
        foreach($propertyies as $property){
            Property::create(['nom' => $property ,'icon' => null]);
        }

    }
}
