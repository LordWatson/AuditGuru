<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Seeder;
use App\Models\Organization;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $basic = SubscriptionPlan::create([
            'name' => 'Basic',
            'description' => 'Basic Plan includes the essential features to pass basic audits',
            'price' => 49.99,
            'interval' => 'monthly',
            'trial_period_days' => 30,
        ]);


        $basic->modules()->sync([1, 5, 7, 8, 9]);

        $pro = SubscriptionPlan::create([
            'name' => 'Pro',
            'description' => 'Pro plan includes all the basic features, plus unlimited AI generated policies and reports',
            'price' => 99.99,
            'interval' => 'monthly',
            'trial_period_days' => 60,
        ]);

        $pro->modules()->sync([1, 2, 4, 5, 7, 8, 9]);

        $enterprise = SubscriptionPlan::create([
            'name' => 'Enterprise',
            'description' => 'Enterprise plan includes every available feature, for multi-client organizations, white-label dashboards, and API integrations on demand',
            'price' => 299.99,
            'interval' => 'monthly',
            'trial_period_days' => 90,
        ]);

        $enterprise->modules()->sync([1, 2, 3, 4, 5, 6, 7, 8, 9]);
    }
}
