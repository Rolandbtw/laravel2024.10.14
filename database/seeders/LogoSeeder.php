<?php

namespace Database\Seeders;

use DB;
use App\Models\Car;
use App\Models\Maker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        config(["database.connections.mysql.database" => 'autok']);

        $rows = Maker::all()->count();
        $logoNames = scandir("./public/logo");
        print_r($logoNames);
        unset($logoNames[0]);
        unset($logoNames[1]);
        foreach($logoNames as $logo){
            Maker::where('name', str_replace("_"," ",explode(".",$logo)[0]))->update(['logo' => 'logo/'.$logo]);
        }
    }
}
