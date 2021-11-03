<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Draco;

class ConsultaDraco extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'consulta:Draco';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando consulta o valor da criptomoeda Draco.';

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
     * @return int
     */
    public function handle()
    {
        $url = 'https://api.mir4global.com/wallet/prices/draco/lastest';

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = floatval(json_decode(curl_exec($ch), true)["Data"]["USDDracoRate"]);

        $draco = new Draco;
        $draco->value = $response;
        $draco->save();
        
        exit;
    }
}
