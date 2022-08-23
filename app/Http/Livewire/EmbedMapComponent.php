<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EmbedMapComponent extends Component {
    public $mapCode = '', $outputMap;

    public function mount(){
    $code =   DB::table('embedcode')
                ->where('name', 'mapindex')
                ->where('place', 'index')
                ->first();

    $this->mapCode = $code ? $code->code : [];;
    }

    public function updatedMapCode($value){
        DB::table('embedcode')
        ->updateOrInsert(
            ['name' => 'mapindex', 'place' => 'index'],
            ['code' => $value]
        );
    }
    public function getCode(){
      return  DB::table('embedcode')
                ->where('name', 'mapindex')
                ->where('place', 'index')
                ->first();
    }
    public function render() {
        $resultCode = $this->getCode();
        // dd($resultCode);
        return view('livewire.embed-map-component', compact('resultCode'));
    }
}
