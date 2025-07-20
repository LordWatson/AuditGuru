<?php

namespace Database\Seeders;

use App\Models\AuditReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuditReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AuditReport::insert([
            [
                'org_id' => 1,
                'framework_id' => 1,
                'ai_summary' => 'Initial Cyber Essentials audit completed. 3 controls need improvement.',
                'file_url' => 's3://complianceguru/reports/audit_ce_2025.pdf',
            ],
        ]);
    }
}
