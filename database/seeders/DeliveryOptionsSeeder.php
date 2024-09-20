<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeliveryOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('delivery_options')->insert([
            ['name' => 'DPD - 25 zł', 'price' => 25.00],
            ['name' => 'DHL - 20 zł', 'price' => 20.00],
            ['name' => 'InPost - 15 zł', 'price' => 15.00],
            ['name' => 'Poczta Polska - 12 zł', 'price' => 12.00],
        ]);
    }
}
