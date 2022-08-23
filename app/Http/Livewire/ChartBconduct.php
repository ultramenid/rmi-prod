<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChartBconduct extends Component
{
    public function getBExecution(){
        $bExecution =  DB::table('corporateprofilepages')->select('shortname','bExecution','bAverage','bAll')->orderBy('bExecution', 'desc')->get();
        foreach($bExecution as $item){
            $data['name'][] = $item->shortname;
            $data['bExecution'][] = $item->bExecution;
            $data['bAverage'][] = $item->bAverage;
            $data['bAll'][] = $item->bAll;
        }
        // dd($data);
        return json_encode($data);
    }
    public function render(){
        $corporateData = $this->getBExecution();
        return view('livewire.chart-bconduct', compact('corporateData'));
    }
}
