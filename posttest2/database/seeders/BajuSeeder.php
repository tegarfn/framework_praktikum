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
        $bajus = [
            [
                'id' => '1',
                'tipe' => '1',
                'ukuran' => 'L',
                'warna' => 'Merah',
                'jumlah' => '1',
            ],
            [
                'id' => '2',
                'tipe' => '2',
                'ukuran' => 'XL',
                'warna' => 'Jingga',
                'jumlah' => '4',
            ],
            [
                'id' => '3',
                'tipe' => '3',
                'ukuran' => 'M',
                'warna' => 'Biru',
                'jumlah' => '12',
            ],
        ];
        foreach($bajus as $bj){
            Baju::create([
                'tipe' => $bj["tipe"],
                'ukuran' => $bj["ukuran"],
                'warna' => $bj["warna"],
                'jumlah' => $bj["jumlah"]
            ]);
        }
    }
}
