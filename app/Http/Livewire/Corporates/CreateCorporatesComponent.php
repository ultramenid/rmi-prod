<?php

namespace App\Http\Livewire\Corporates;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCorporatesComponent extends Component{
    use WithFileUploads;
    public $sidenav = 'overview';
    public $overview = true, $operationalrea = false, $financial = false, $corporatenetwork = false, $spotlight = false;
    public $category = '...', $overviewenglish, $overviewindonesia, $operationenglish, $operationindonesia, $financialenglish, $ownershipenglish, $ownershipindonesia, $financialindonesia, $corporatenetworkenglish, $corporatenetworkindonesia, $corporatename, $spotlightenglish, $spotlightindonesia,
    $development, $developmentAverage, $developmentAll,
    $execution, $bAverage, $bAll,
    $management, $managementAverage, $managementAll,
    $communityExecution, $communityAverage, $communityAll,
    $condition, $workingAverage, $workingAll,
    $responsibility, $fAverage, $fAll,
    $groupname, $location, $photo;
    public $isCategory, $categories = [];

    public function toogleCategory(){
        $this->isCategory = true;
    }

    public function uploadImage(){
        $file = $this->photo->store('public/files/shares');
        $foto = $this->photo->hashName();

        $manager = new ImageManager();

        // https://image.intervention.io/v2/api/fit
        $image = $manager->make('storage/files/shares/'.$foto)->fit(300, 150);
        $image->save('storage/files/shares/thumbnail/'.$foto);
        return $foto;
    }

    public function updatedPhoto($photo){
        $extension = pathinfo($photo->getFilename(), PATHINFO_EXTENSION);
        if (!in_array($extension, ['png', 'jpeg', 'bmp', 'gif','jpg','webp','mp4', 'avi', '3gp', 'mov', 'm4a'])) {
           $this->reset('photo');
           $message = 'Files not supported';
           $type = 'error'; //error, success
           $this->emit('toast',$message, $type);
        }

    }

    public function closeCategory(){
        $this->isCategory = false;
    }

    public function deleteCategory($id){
        unset($this->categories[$id]);
    }

    public function setCategory($cat){
        if (!in_array($cat, $this->categories)) {
            array_push($this->categories, $cat);
        }
        // $this->choosepelaku = $pelaku;
        $this->category = '';
    }

    public function getstringCategory(){
        return implode(',', $this->categories);
    }

    public function storeCorporate(){

        if($this->setValidation()){
            DB::table('corporateprofilepages')->insert([
                'name'=> $this->corporatename,
                'logo' => $this->uploadImage(),
                'kategori' => $this->getstringCategory(),
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
                'development' => $this->development,
                'developmentAverage' => $this->developmentAverage,
                'developmentAll' => $this->developmentAll,
                'management' => $this->management,
                'managementAverage' => $this->managementAverage,
                'managementAll' => $this->managementAll,
                'communityExecution' => $this->communityExecution,
                'communityAverage'=> $this->communityAverage,
                'communityAll' => $this->communityAll,
                'condition' => $this->condition,
                'workingAverage' => $this->workingAverage,
                'workingAll' => $this->workingAll,
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
        }elseif($this->categories == ''){
            $message = 'Corporate Category is required';
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


