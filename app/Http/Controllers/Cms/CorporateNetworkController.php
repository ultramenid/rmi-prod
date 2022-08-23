<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorporateNetworkController extends Controller
{
    public function index(){
        $title = 'Corporate Network - Kinerja Tambang Indonesia';
        $nav = 'pages';
        $sidenav = 'corporatenetwork';
        return view('pages.cms.corporatenetwork', compact('title', 'nav','sidenav'));
    }
}
