<?php

namespace App\Http\Controllers;
use App\Draco;

class DracoController extends Controller
{
    public function __Construct (Draco $draco){
        $this->Draco = $draco;
    }

    function getDracoDaily(){
        return $this->Draco->whereRaw('`created_at` > (NOW() - INTERVAL 1 DAY)')->get('value', 'created_at');
    }

    function getDracoWeekly(){
        return $this->Draco->whereRaw('`created_at` > (NOW() - INTERVAL 7 DAY)')->get('value', 'created_at');
    }

    function getDracoMonthly(){
        return $this->Draco->whereRaw('`created_at` > (NOW() - INTERVAL 30 DAY)')->get('value', 'created_at');
    }

    function getDracoAll(){
        return $this->Draco->all('value', 'created_at');
    }
}
