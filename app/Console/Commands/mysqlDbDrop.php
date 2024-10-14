<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class mysqlDbDrop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:dropdb {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $schemaName = $this->argument('name') ?: config("database.connections.mysql.database");
        $charset = config("database.connections.mysql.charset",'utf8mb4');
        $collation = config("database.connections.mysql.collation",'utf8mb4_unicode_ci');

        $query = "DROP DATABASE IF EXISTS $schemaName;";

        DB::statement($query);

        config(["database.connections.mysql.database" => null]);
    }
}
