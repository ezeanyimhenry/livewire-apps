<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Continent::create(['name' => 'North America']);
        Continent::create(['name' => 'South America']);
        Continent::create(['name' => 'Europe']);
        Continent::create(['name' => 'Asia']);
        Continent::create(['name' => 'Africa']);
        Continent::create(['name' => 'Australia']);
        Continent::create(['name' => 'Antarctica']);
    }
}
