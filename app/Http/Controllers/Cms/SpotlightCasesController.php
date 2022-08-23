<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpotlightCasesController extends Controller
{
    public function index(){
        $title = 'Spotlight Cases - Kinerja Tambang Indonesia';
        $nav = 'pages';
        $sidenav = 'spotlightcases';
        return view('pages.cms.spotlightcases', compact('title', 'nav','sidenav'));
    }
}
