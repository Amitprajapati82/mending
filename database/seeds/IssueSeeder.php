<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Issue;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example data to seed the issues table
        $issues = [
            ['name' => 'Battery Issue'],
            ['name' => 'Not Turning On'],
            ['name' => 'Motherboard Repair'],
            ['name' => 'Not Charging'],
            ['name' => 'Speaker Issue'],
            ['name' => 'Keyboard Issue'],
            ['name' => 'Software Issue'],
            ['name' => 'SSD Upgrade'],
            ['name' => 'Hanging Issue'],
            ['name' => 'Network Issue'],
            ['name' => 'Bluetooth/Wifi Issue'],
            ['name' => 'Camera Issue'],
            ['name' => 'Mic Issue'],
            ['name' => 'Power Button Issue'],
            ['name' => 'Device Diagnose'],
            ['name' => 'Audio Jack'],
            ['name' => 'Receiver Issue'],
            ['name' => 'Back Panel Replacement'],
            ['name' => 'Water Damage'],
            ['name' => 'Touchpad Damage'],
            ['name' => 'Data Recovery'],
            ['name' => 'Proximity Sensor'],
            ['name' => 'Mobile Overheating Issue'],
            ['name' => 'Signal Issue'],
        ];

        // Insert the data into the issues table
        Issue::insert($issues);
    }
}
