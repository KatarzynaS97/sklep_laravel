<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Sukienki', 'slug' => Str::slug('Dress')],
            ['name' => 'Spodnie', 'slug' => Str::slug('Trousers')],
            ['name' => 'Koszule', 'slug' => Str::slug('Shirt')],
            ['name' => 'Bluzki', 'slug' => Str::slug('TShirt')],
            ['name' => 'Bielizna', 'slug' => Str::slug('Underwear')],
            ['name' => 'Skarpetki', 'slug' => Str::slug('Socks')],
        ]);
    }
}

