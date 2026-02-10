<?php

namespace Database\Seeders;

use HotelSeeder;
use App\Models\User;
use illuminate\Database\DB;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\RoomSeeder;
use Database\Seeders\PropertySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //   DB::table('hotels')->insert([
        //     'statut'=>'pending']);

        $this->call([HotelSeeder::class]);
        $this->call([TagSeeder::class]);
        $this->call([PropertySeeder::class]);
        $this->call([RoomSeeder::class]);

}
}
