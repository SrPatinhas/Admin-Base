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
                'created_at' => '2020-02-17 18:15:57',
                'updated_at' => '2020-02-17 18:15:57',
            ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2020-02-17 18:15:57',
                'updated_at' => '2020-02-17 18:15:57',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2020-02-17 18:15:57',
                'updated_at' => '2020-02-17 18:15:57',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
