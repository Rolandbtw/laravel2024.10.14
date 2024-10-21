<?php
namespace App\Console\Commands;

use App\Models\Maker;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\progress;

class getmodels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:uploaddata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'upload table content';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        config(["database.connections.mysql.database" => 'autok']);

        $linecount = 0;
        $handle = fopen("car-db.csv", "r");
        while(!feof($handle)){
            $line = fgets($handle);
            $linecount++;
        }

        fclose($handle);

        $file = fopen("car-db.csv","r");
        fgetcsv($file, 1000, ',');
        fgetcsv($file, 1000, ',');
        
        $adatok = array();
        while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
            if(!in_array($data[1],$adatok)){
                array_push($adatok, $data[1]);
            }
        }

        $progress = progress(label: 'Uploading makers data', steps: count($adatok));
        $progress->start();


        foreach ($adatok as $adat) {
            $entity = new Maker();
            $entity->name = $adat;
            $entity->save();
            $progress->advance();
            // $query = "INSERT INTO makers (name) VALUES ('$adat');";
            // DB::statement($query);
        }
        $progress->finish();
        fclose($file);
    }
}