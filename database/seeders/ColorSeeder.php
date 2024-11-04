<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const ITEMS = [
        [
            'name' => '01 - fehér',
            'hex' => '#FFFFFF',
        ],
        [
            'name' => '02 - sárga',
            'hex' => '#FFFF00',
        ],
        [
            'name' => '03 - narancs',
            'hex' => '#FFA500',
        ],
        [
            'name' => '04 - piros',
            'hex' => '#FF0000',
        ],
        [
            'name' => '05 - bíbor / lila',
            'hex' => '#800080',
        ],
        [
            'name' => '06 - kék',
            'hex' => '#0000FF',
        ],
        [
            'name' => '07 - zöld',
            'hex' => '#008000',
        ],
        [
            'name' => '08 - szürke',
            'hex' => '#808080',
        ],
        [
            'name' => '09 - barna',
            'hex' => '#A52A2A',
        ],
        [
            'name' => '10 - fekete',
            'hex' => '#000000',
        ],
    ];

    public function run(): void
    {
        foreach(self::ITEMS as $item){
            $entity = new Color();
            $entity->name = $item['name'];
            $entity->hex = $item['hex'];
            $entity->save();
        }
    }
}
