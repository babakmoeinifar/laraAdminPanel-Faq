<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => '1',
                'name'       => 'Lead',
                'created_at' => '2020-01-09 07:19:49',
                'updated_at' => '2020-01-09 07:19:49',
            ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2020-01-09 07:19:49',
                'updated_at' => '2020-01-09 07:19:49',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2020-01-09 07:19:49',
                'updated_at' => '2020-01-09 07:19:49',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
