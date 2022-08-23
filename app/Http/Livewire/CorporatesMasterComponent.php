<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CorporatesMasterComponent extends Component{
    use WithPagination;
    public $dataField = 'name', $dataOrder = 'asc', $paginate = 15, $search = '';
    public $deleter = false;
    public $deleteName, $deleteID;


     public function sortingField($field){
        $this->dataField = $field;
        $this->dataOrder = $this->dataOrder == 'asc' ? 'desc' : 'asc';
    }


    public function getCorporates(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('corporateprofilepages')
                        ->where('name', 'like', $sc)
                        ->orderBy($this->dataField, $this->dataOrder)
                        ->paginate($this->paginate);
        } catch (\Throwable $th) {
            return [];
        }
    }

    public function delete($id){

        //load data to delete function
        $dataDelete = DB::table('corporateprofilepages')->where('id', $id)->first();
        $this->deleteName = $dataDelete->name;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }

    public function deleting($id){
        DB::table('corporateprofilepages')->where('id', $id)->delete();
        $message = 'Successfully deleting corporate';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }

    public function closeDelete(){
        $this->deleter = false;
        $this->deleteName = null;
        $this->deleteID = null;
    }

    public function render(){
        $corporates = $this->getCorporates();
        return view('livewire.corporates-master-component', compact('corporates'));
    }
}
