<?php

namespace Database\Seeders;

use App\Models\Tevekenysegek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TevekenysegekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tevekenysegek::insert([
            [
                'kat_id'=>1,
                'tev_nev'=>'Mosogatás',
                'allapot'=>false,
            ],
            [
                'kat_id'=>1,
                'tev_nev'=>'Porszívózás',
                'allapot'=>true,
            ],
            [
                'kat_id'=>1,
                'tev_nev'=>'Szellőztetés',
                'allapot'=>false,
            ],
            [
                'kat_id'=>2,
                'tev_nev'=>'Házifeladat',
                'allapot'=>false,
            ],
            [
                'kat_id'=>2,
                'tev_nev'=>'Dolgozat',
                'allapot'=>false,
            ],
            [
                'kat_id'=>2,
                'tev_nev'=>'Sportkör',
                'allapot'=>false,
            ],
            [
                'kat_id'=>3,
                'tev_nev'=>'Fogmosás',
                'allapot'=>true,
            ],
            [
                'kat_id'=>3,
                'tev_nev'=>'Fürdés',
                'allapot'=>true,
            ],
        ]);
    }
}
