<?php

namespace Database\Seeders;

use App\Actions\Control\CreateControlAction;
use App\Models\Framework;
use Illuminate\Database\Seeder;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(CreateControlAction $createControlAction): void
    {
        $cyberEssentials = Framework::where('slug', 'cyber-essentials')->first()->id;

        $controls = [
            ['framework_id' => $cyberEssentials, 'control_code' => 'CE-01', 'description' => 'Use of firewalls to secure Internet connections.'],
            ['framework_id' => $cyberEssentials, 'control_code' => 'CE-02', 'description' => 'Secure configuration of devices and software.'],
            ['framework_id' => $cyberEssentials, 'control_code' => 'CE-03', 'description' => 'User access control and privilege management.'],
            ['framework_id' => $cyberEssentials, 'control_code' => 'CE-04', 'description' => 'Use of up-to-date malware protection.'],
            ['framework_id' => $cyberEssentials, 'control_code' => 'CE-05', 'description' => 'Patch management and software updates.'],
        ];

        foreach($controls as $control){
            $createControlAction->execute($control);
        }
    }
}
