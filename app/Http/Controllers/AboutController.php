<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AboutController extends Controller
{
    public function setTitle(){
        if (App::getLocale() == 'id') {
          return  'Tentang - Kinerja Tambang Indonesia';
        }
        return 'About - Kinerja Tambang Indonesia';
    }

    public function index(){
        $title = $this->setTitle();
        $nav = "about";
        return view('pages.about', compact('title', 'nav'));
    }
}
