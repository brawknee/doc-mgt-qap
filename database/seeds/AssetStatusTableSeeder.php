<?php

use App\Models\AssetStatus;
use Illuminate\Database\Seeder;

class AssetStatusTableSeeder extends Seeder
{
    public function run()
    {
        $assetStatuses = [
            [
                'id'         => 1,
                'name'       => 'Available',
                'created_at' => '2021-11-18 07:31:35',
                'updated_at' => '2021-11-18 07:31:35',
            ],
            [
                'id'         => 2,
                'name'       => 'Not Available',
                'created_at' => '2021-11-18 07:31:35',
                'updated_at' => '2021-11-18 07:31:35',
            ],
            [
                'id'         => 3,
                'name'       => 'Broken',
                'created_at' => '2021-11-18 07:31:35',
                'updated_at' => '2021-11-18 07:31:35',
            ],
            [
                'id'         => 4,
                'name'       => 'Out for Repair',
                'created_at' => '2021-11-18 07:31:35',
                'updated_at' => '2021-11-18 07:31:35',
            ],
        ];

        AssetStatus::insert($assetStatuses);
    }
}
