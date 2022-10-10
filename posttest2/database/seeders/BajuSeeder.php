<?php

namespace Database\Seeders;

use App\Models\Baju;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BajuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baju = [
            [
                'id' => '1',
                'tipe' => 'T-shirt',
                'ukuran' => 'L',
                'warna' => 'Merah',
                'jumlah' => '1',
            ],
            [
                'id' => '2',
                'tipe' => 'Polo',
                'ukuran' => 'XL',
                'warna' => 'Jingga',
                'jumlah' => '4',
            ],
            [
                'id' => '3',
                'tipe' => 'Jersey',
                'ukuran' => 'M',
                'warna' => 'Biru',
                'jumlah' => '12',
            ],
        ];
        foreach($baju as $bj){
            Baju::firstOrCreate($bj);
        }
    }
}
