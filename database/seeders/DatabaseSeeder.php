<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            ModuleSeeder::class,
            SubscriptionPlanSeeder::class,
            OrganizationsSeeder::class,
            FrameworkSeeder::class,
            ControlSeeder::class,
            DocumentSeeder::class,
            AuditReportSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints();

        $this->call([
            RolesSeeder::class,
            PermissionsSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
