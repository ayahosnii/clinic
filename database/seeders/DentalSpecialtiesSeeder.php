<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DentalSpecialtiesSeeder extends Seeder
{
    public function run()
    {
        $specialties = [
            ['name' => 'Orthodontics', 'description' => 'Orthodontics description'],
            ['name' => 'Endodontics', 'description' => 'Endodontics description'],
            ['name' => 'Periodontics', 'description' => 'Periodontics description'],
        ];

        // Insert the data into the 'dental_specialties' table
        DB::table('specialties')->insert($specialties);
    }
}
