<?php

namespace App\Http\Livewire\Corporates;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateCorporatesComponent extends Component{
    public $sidenav = 'overview';
    public $overview = true, $operationalrea = false, $financial = false, $corporatenetwork = false, $spotlight = false;
    public $overviewenglish, $overviewindonesia, $operationenglish, $operationindonesia, $financialenglish, $ownershipenglish, $ownershipindonesia, $financialindonesia, $corporatenetworkenglish, $corporatenetworkindonesia, $corporatename, $spotlightenglish, $spotlightindonesia, $execution, $bAverage, $bAll, $responsibility, $fAverage, $fAll, $groupname, $location;


    public function storeCorporate(){

        if($this->setValidation()){
            DB::table('corporateprofilepages')->insert([
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
                'bAll' => $this->bAll,
                'eResponsibility' => $this->responsibility,
                'eAverage' => $this->fAverage,
                'fAll' => $this->fAll,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);

            redirect()->to('/cms/corporates');
        }

    }



    public function render(){
        return view('livewire.corporates.create-corporates-component');
    }



    public function setValidation(){
        if($this->corporatename == ''){
            $message = 'Corporate name required';
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
            $message = 'Corporate Network content english is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->corporatenetworkindonesia == ''){
            $message = 'Corporate Network content indonesia is required';
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
        }
        elseif($this->execution == ''){
            $message = 'Bussines Execution is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->bAverage == ''){
            $message = 'Bussines Average is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->bAll == ''){
            $message = 'Bussines Score is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->responsibility == ''){
            $message = 'Environmental Responsibility is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->fAverage == ''){
            $message = 'Average Responsibility is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->fAll == ''){
            $message = 'Responsibility Score is required';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}


