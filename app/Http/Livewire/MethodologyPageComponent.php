<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MethodologyPageComponent extends Component
{
    public $contentenglish, $contentindonesia;



    public function mount(){
        $data = DB::table('pages')->where('name', 'methodology')->first();
        $this->contentindonesia = empty($data->contentindonesia) ? '' : $data->contentindonesia ;
        $this->contentenglish = empty($data->contentenglish) ? '' : $data->contentenglish ;
    }

    protected $rules = [
        'contentenglish' => 'required',
        'contentindonesia' => 'required'
    ];

    public function checkingContent(){
        return  DB::table('pages')->where('name', 'methodology')->first();
     }

    public function store(){
        $this->validate();
        if(!$this->checkingContent()){
            DB::table('pages')->insert([
                'name' => 'methodology',
                'contentenglish' => $this->contentenglish,
                'contentindonesia' => $this->contentindonesia,
                'created_at' => Carbon::now()
            ]);
            $message = 'Successfully adding content';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }else{
            DB::table('pages')
                ->where('name','methodology')
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
        return view('livewire.methodology-page-component');
    }
}
