<?php

namespace Database\Seeders;

use App\Actions\Organization\CreateOrganizationAction;
use Illuminate\Database\Seeder;
use App\Models\Organization;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(CreateOrganizationAction $createOrganizationAction): void
    {
        $subscriptionPlanIds = [1, 2, 3];

        $orgs = [
            [
                'name' => 'TechCorp',
                'industry' => 'Technology',
                'size' => 500,
                'plan_id' => $subscriptionPlanIds[0],
            ],[
                'name' => 'EcoTech',
                'industry' => 'Technology',
                'size' => 150,
                'plan_id' => $subscriptionPlanIds[1],
            ],[
                'name' => 'HealthTech',
                'industry' => 'Technology',
                'size' => 200,
                'plan_id' => $subscriptionPlanIds[2],
            ]
        ];

        foreach($orgs as $org){
            $createOrganizationAction->execute($org);
        }
    }
}
