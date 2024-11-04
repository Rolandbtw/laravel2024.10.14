<?php

namespace Database\Seeders;

use App\Models\Shifter;
use Illuminate\Database\Seeder;

class ShifterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     const ITEMS = [
        '0 - mechanikus',
        '1 - félautomata',
        '2 - automata',
        '3 - szekvenciális',
    ];

    public function run(): void
    {
        foreach(self::ITEMS as $item){
            $entity = new Shifter();
            $entity->name = $item;
            $entity->save();
        }
    }
}
