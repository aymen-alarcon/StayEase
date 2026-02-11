<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Admin', 'Gerant', 'Client'];

        Role::factory()
            ->count(3)
            ->sequence(fn ($sequence) => ['name' => $roles[$sequence->index]])
            ->create();
    }
}
