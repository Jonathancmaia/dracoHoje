<?php

namespace App\Http\Controllers;
use App\Draco;

class DracoController extends Controller
{
    public function __Construct (Draco $draco){
        $this->Draco = $draco;
    }

    function getDracoDaily(){
        return $this->Draco->whereRaw('`created_at` > (NOW() - INTERVAL 1 DAY)')->get();
    }

    function getDracoWeekly(){
        return $this->Draco->whereRaw('`created_at` > (NOW() - INTERVAL 7 DAY)')->get();
    }

    function getDracoMonthly(){
        return $this->Draco->whereRaw('`created_at` > (NOW() - INTERVAL 30 DAY)')->get();
    }

    function getDracoAll(){
        return $this->Draco->all();
    }
}
