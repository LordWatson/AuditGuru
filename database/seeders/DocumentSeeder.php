<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Document::insert([
            [
                'org_id' => 1,
                'control_id' => 1,
                'file_name' => 'FirewallConfig.pdf',
                'file_url' => 's3://complianceguru/docs/firewall.pdf',
                'version' => '1.0',
            ],
        ]);
    }
}
