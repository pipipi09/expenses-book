<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Family;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Family::factory()
                ->count(3)
                ->hasUsers(3)
                ->create();
    }
}
