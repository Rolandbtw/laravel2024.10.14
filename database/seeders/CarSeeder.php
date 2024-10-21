<?php

namespace Database\Seeders;

use DB;
use App\Models\Car;
use App\Models\Maker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        config(["database.connections.mysql.database" => 'autok']);

        $file = fopen("car-db.csv","r");
        fgetcsv($file, 1000, ',');
        fgetcsv($file, 1000, ',');
        
        $adatok = array();
        while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
            if(!in_array(array($data[1],$data[2]),$adatok)){
                array_push($adatok, array($data[1],$data[2]));
            }
        }

        $tabla = Maker::all();
        for($i = 0; $i < count($adatok); $i++){
            foreach($tabla as $adat){
                if($adat->name == $adatok[$i][0]){
                    $entity = new Car();
                    $entity->name = $adatok[$i][1];
                    $entity->maker_id = $adat->id;
                    $entity->save();
                }
            }
        }

        

        
    }
}
