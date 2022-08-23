<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SpotlightCasesComponent extends Component{
    public $contentenglish, $contentindonesia;

     public function mount(){
         $data = DB::table('corporateprofilepages')->where('name', 'spotlightcases')->first();
         $this->contentindonesia = empty($data->contentindonesia) ? '' : $data->contentindonesia ;
         $this->contentenglish = empty($data->contentenglish) ? '' : $data->contentenglish ;
     }
     protected $rules = [
        'contentenglish' => 'required',
        'contentindonesia' => 'required'
    ];

    public function checkingContent(){
        return  DB::table('corporateprofilepages')->where('name', 'spotlightcases')->first();
     }

    public function store(){

        $this->validate();
        if(!$this->checkingContent()){
            DB::table('corporateprofilepages')->insert([
                'name' => 'spotlightcases',
                'contentenglish' => $this->contentenglish,
                'contentindonesia' => $this->contentindonesia,
                'created_at' => Carbon::now()
            ]);
            $message = 'Successfully adding content';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }else{
            DB::table('corporateprofilepages')
                ->where('name','spotlightcases')
                ->update([
                    'contentenglish' => $this->contentenglish,
                    'contentindonesia' => $this->contentindonesia,
                    'updated_at' => Carbon::now()
                ]);
                $message = 'Successfully updating content';
                $type = 'success'; //error, success
                $this->emit('toast',$message, $type);
        }
    }
    public function render(){
        return view('livewire.spotlight-cases-component');
    }
}
