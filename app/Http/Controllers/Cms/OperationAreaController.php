<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperationAreaController extends Controller
{
    public function index(){
        $title = 'Operation Area - Kinerja Tambang Indonesia';
        $nav = 'pages';
        $sidenav = 'operationarea';
        return view('pages.cms.operationarea', compact('title', 'nav','sidenav'));
    }
}
