<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create doctor schedule
        \App\Models\DoctorSchedule::create([
            'doctor_id' => 1,
            'day' => 'Monday',
            'time' => '08:00 - 12:00'
        ]);

        //auto generate doctor schedule
        \App\Models\Doctor::all()->each(function ($doctor) {
            \App\Models\DoctorSchedule::factory()->count(1)->create([
                'doctor_id' => $doctor->id
            ]);
        });
    }
}
