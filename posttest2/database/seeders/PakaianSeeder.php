<?php

namespace Database\Seeders;

use App\Models\Pakaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PakaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pakaians = [
            [
                'id' => '1',
                'model' => 'T-shirt'
            ],
            [
                'id' => '2',
                'model' => 'Polo'
            ],
            [
                'id' => '3',
                'model' => 'Jersey'
            ],
        ];
        foreach($pakaians as $pakaian){
            Pakaian::create([
                'model' => $pakaian["model"]
            ]);
        }
    }
}
