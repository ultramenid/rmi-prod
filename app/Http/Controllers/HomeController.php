<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getCode(){
        return  DB::table('embedcode')
                  ->where('name', 'mapindex')
                  ->where('place', 'index')
                  ->first();
    }
    public function index(){
        $resultCode = $this->getCode();
        $title = 'Index - Kinerja Tambang Indonesia';
        $nav = 'index';
        return view('pages.index', compact('title','resultCode', 'nav'));
    }
}
