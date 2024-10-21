<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    const ITEMS = ['benzin','dízel','benzin/lpg','benzin/cng','dízel/lpg','dízel/cng','hibrid (benzin)','hibrid (dízel)','elektromos','etanol','biodízel','LPG','CNG','hidrogén'];

    public function run(): void
    {
        foreach(self::ITEMS as $item){
            $entity = new Fuel(['name'=>$item]);
            $entity->save();
        }
    }
}
