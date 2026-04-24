<?php

namespace Database\Seeders;

use App\Models\Kategoriak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategoriak::insert([
            [
                'katnev'=>'Házimunka',
            ],
            [
                'katnev'=>'Iskola',
            ],
            [
                'katnev'=>'Egyéb',
            ],
        ]);
    }
}
