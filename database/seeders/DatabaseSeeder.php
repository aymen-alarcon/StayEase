<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Database\DB;

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
