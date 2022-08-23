<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChartEresponsibility extends Component
{
    public function getBExecution(){
        $bExecution =  DB::table('corporateprofilepages')->select('shortname','eResponsibility','eAverage','fAll')->orderBy('eResponsibility', 'desc')->get();
        foreach($bExecution as $item){
            $data['name'][] = $item->shortname;
            $data['eResponsibility'][] = $item->eResponsibility;
            $data['eAverage'][] = $item->eAverage;
            $data['fAll'][] = $item->fAll;
        }
        // dd($data);
        return json_encode($data);
    }
    public function render()
    {
        $corporateData = $this->getBExecution();
        return view('livewire.chart-eresponsibility', compact('corporateData'));
    }
}
