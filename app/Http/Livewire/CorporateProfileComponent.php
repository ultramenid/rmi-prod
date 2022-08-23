<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CorporateProfileComponent extends Component
{
    // public $overview = true , $operationalrea = false, $financial = false, $corporatenetwork = false, $spotlight = false;
    public $idcorporate;

    public function mount($idcorporate){
        $this->idcorporate = $idcorporate;
    }

    public function getlocalContent(){
        if (App::getLocale() == 'id') {
            return  'name, overviewindonesia as overview, operationareaindonesia as operationarea, financialindonesia as financialownership, ownershipindonesia as ownership,  corporatenetworkindonesia as corporatenetwork, spotlightcasesindonesia as spotlightcases';
          }
          return 'name, overviewenglish as overview, operationareaenglish as operationarea, financialenglish as financialownership, ownershipenglish as ownership, corporatenetworkenglish as corporatenetwork, spotlightcasesenglish as spotlightcases';
    }

    public function getCorporates(){
        return DB::table('corporateprofilepages')
                    ->selectRaw($this->getlocalContent())
                    ->where('id', $this->idcorporate)
                    ->first();
    }

    public function render()
    {
        $data = $this->getCorporates();
        return view('livewire.corporate-profile-component', compact('data'));
    }
}
