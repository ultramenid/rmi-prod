<?php

namespace App\Http\Livewire\Corporates;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EditCorporatesComponent extends Component{
    public $idcorporates;
    public $sidenav = 'overview';
    public $overview = true, $operationalrea = false, $financial = false, $corporatenetwork = false, $spotlight = false;
    public $overviewenglish, $overviewindonesia, $operationenglish, $operationindonesia, $financialenglish, $financialindonesia, $ownershipenglish, $ownershipindonesia, $corporatenetworkenglish, $corporatenetworkindonesia, $corporatename, $spotlightenglish, $spotlightindonesia, $execution, $bAverage, $bAll, $responsibility, $fAverage, $fAll, $groupname, $location;

    public function mount($idcorporates){
        $this->idcorporates = $idcorporates;
        $data = DB::table('corporateprofilepages')->where('id', $idcorporates)->first();

        $this->corporatename = $data->name;
        $this->groupname = $data->shortname;
        $this->location = $data->lokasi;
        $this->overviewenglish = $data->overviewenglish;
        $this->overviewindonesia = $data->overviewindonesia;
        $this->operationenglish = $data->operationareaenglish;
        $this->operationindonesia = $data->operationareaindonesia;
        $this->financialenglish = $data->financialenglish;
        $this->financialindonesia = $data->financialindonesia;
        $this->ownershipenglish = $data->ownershipenglish;
        $this->ownershipindonesia = $data->ownershipindonesia;
        $this->corporatenetworkenglish = $data->corporatenetworkenglish;
        $this->corporatenetworkindonesia = $data->corporatenetworkindonesia;
        $this->spotlightenglish = $data->spotlightcasesenglish;
        $this->spotlightindonesia = $data->spotlightcasesindonesia;
        $this->execution = $data->bExecution;
        $this->bAverage = $data->bAverage;
        $this->bAll = $data->bAll;
        $this->responsibility = $data->eResponsibility;
        $this->fAverage = $data->eAverage;
        $this->fAll = $data->fAll;
    }

    public function updateCorporate(){

       if($this->setValidation()){
        DB::table('corporateprofilepages')->where('id', $this->idcorporates)->update([
            'name'=> $this->corporatename,
            'shortname' => $this->groupname,
            'lokasi' => $this->location,
            'overviewenglish' => $this->overviewenglish,
            'overviewindonesia' => $this->overviewindonesia,
            'operationareaenglish' => $this->operationenglish,
            'operationareaindonesia' => $this->operationindonesia,
            'financialenglish' => $this->financialenglish,
            'financialindonesia' => $this->financialindonesia,
            'ownershipenglish' => $this->ownershipenglish,
            'ownershipindonesia' => $this->ownershipindonesia,
            'corporatenetworkenglish' => $this->corporatenetworkenglish,
            'corporatenetworkindonesia' => $this->corporatenetworkindonesia,
            'spotlightcasesenglish' => $this->spotlightenglish,
            'spotlightcasesindonesia' => $this->spotlightindonesia,
            'bExecution' => $this->execution,
            'bAverage' => $this->bAverage,
            'bAll' => str_replace(",",".", $this->bAll),
            'eResponsibility' => $this->responsibility,
            'eAverage' => $this->fAverage,
            'fAll' => $this->fAll,
            'updated_at' => Carbon::now('Asia/Jakarta')
        ]);
        $message = 'Successfully updating corporate content';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
       }


    }

    public function render(){
        return view('livewire.corporates.edit-corporates-component');
    }

    public function setValidation(){
        if($this->corporatename == ''){
            $message = 'Corporate name required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->overviewenglish == ''){
            $message = 'Overview  content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->overviewindonesia == ''){
            $message = 'Overview  content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->operationenglish == ''){
            $message = 'Operation area content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->operationindonesia == ''){
            $message = 'Operation area content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->financialenglish == ''){
            $message = 'Financial content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->financialindonesia == ''){
            $message = 'Financial content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->ownershipenglish == ''){
            $message = 'Ownership content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->ownershipindonesia == ''){
            $message = 'Ownership content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->corporatenetworkenglish == ''){
            $message = 'Corporation content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->corporatenetworkindonesia == ''){
            $message = 'Corporation content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->spotlightenglish == ''){
            $message = 'Spotlight Cases content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->spotlightindonesia == ''){
            $message = 'Spotlight Cases content indonesia is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->groupname == ''){
            $message = 'Group name is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->location == ''){
            $message = 'Location is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
