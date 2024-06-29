<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Location::create([
            'name' => 'Bogor',
            'latitude' => -6.59444000,
            'longitude' => 106.78917000,
        ]);
    }
}
