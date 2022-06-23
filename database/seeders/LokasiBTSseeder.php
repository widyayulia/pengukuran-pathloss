<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BTSLocation;

class LokasiBTSseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'jenis_daerah' => 'Rural',
                'latitude' => -7.13543000,
                'longitude' => 111.62303800,
                'hB' => 30,
                'hM' => 1,
            ],
            [
                'jenis_daerah' => 'Suburban',
                'latitude' => -7.23539200,
                'longitude' => 112.79117400,
                'hB' => 30,
                'hM' => 1,
            ],
            [
                'jenis_daerah' => 'Suburban',
                'latitude' => -7.25279500,
                'longitude' => 112.79087300,
                'hB' => 45,
                'hM' => 1,
            ],
            [
                'jenis_daerah' => 'Urban',
                'latitude' => -7.26372700,
                'longitude' => 112.74540700,
                'hB' => 35,
                'hM' => 1,
            ],
            [
                'jenis_daerah' => 'Urban',
                'latitude' => -7.26324700,
                'longitude' => 112.74588700,
                'hB' => 30,
                'hM' => 1,
            ],
            [
                'jenis_daerah' => 'Urban',
                'latitude' => -7.26282700,
                'longitude' => 112.74630700,
                'hB' => 30,
                'hM' => 1,
            ],
        ];

        foreach($data as $item){
            BTSLocation::create($item);
        }
   }
}
