<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CorporateProfileController extends Controller{

    public function setTitle(){
        if (App::getLocale() == 'id') {
          return  'Profil Perusahaan - Kinerja Tambang Indonesia';
        }
        return 'Corporate Profile - Kinerja Tambang Indonesia';
    }

    public function getCorporates(){
        return DB::table('corporateprofilepages')
                    ->select('name', 'id','lokasi')
                    ->orderBy('name', 'asc')
                    ->get();
    }

    public function index(){
        $title = $this->setTitle();
        // dd($this->getCorporates());
        $corporates = $this->getCorporates();
        $nav = 'corporateprofile';
        return view('pages.corporateprofile', compact('title', 'corporates','nav'));
    }


    public function detail($lang, $id){
        $id = $id;
        $nav = 'corporateprofile';
        $title =  'Detail Corporate - Kinerja Tambang Indonesia';
        return view('pages.corporatesdetail', compact('title', 'id', 'nav'));
    }
}
