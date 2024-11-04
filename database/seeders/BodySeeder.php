<?php

namespace Database\Seeders;

use App\Models\Body;
use Illuminate\Database\Seeder;

class BodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const ITEMS = [
        'Crossover',
        'Fastback',
        'Hardtop',
        'Hatchback',
        'Kabrió',
        'Kombi',
        'Kupé',
        'Liftback',
        'Limuzin',
        'Minivan',
        'Pickup',
        'Roadster',
        'Szedán',
        'Targa',
    ];

    public function run(): void
    {
        foreach(self::ITEMS as $item){
            $entity = new Body();
            $entity->name = $item;
            $entity->save();
        }
    }
}
