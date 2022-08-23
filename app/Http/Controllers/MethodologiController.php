<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MethodologiController extends Controller{

    // public function getLocale(){
    //     if (App::getLocale() == 'id') {
    //         // return db field name
    //         return 'contentindonesia as content';
    //     }
    //     // return db field name
    //     return 'contentenglish as content';
    // }

    // public function getContentMethodology(){
    //     return DB::table('pages')
    //         ->select($this->getLocale())
    //         ->where('name', 'methodology')
    //         ->first();
    // }

    public function setTitle(){
        if (App::getLocale() == 'id') {
          return  'Methodologi - Kinerja Tambang Indonesia';
        }
        return 'Methodology - Kinerja Tambang Indonesia';
    }

    public function index(){
        // $data = $this->getContentMethodology();
        $title = $this->setTitle();
        $nav = 'methodology';
        return view('pages.methodology', compact('title', 'nav'));
    }
}
