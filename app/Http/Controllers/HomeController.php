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
    public function getEconomicDevelopment(){
        $bExecution =  DB::table('corporateprofilepages')->select('shortname','development','developmentAverage','developmentAll')->orderBy('shortname', 'desc')->get();
        foreach($bExecution as $item){
            $data['name'][] = $item->shortname;
            $data['development'][] = $item->development;
            $data['developmentAverage'][] = $item->developmentAverage;
            $data['developmentAll'][] = $item->developmentAll;
        }
        // dd($data);
        return json_encode($data);
    }
    public function getBussinesConduct(){
        $bExecution =  DB::table('corporateprofilepages')->select('shortname','bExecution','bAverage','bAll')->orderBy('shortname', 'desc')->get();
        foreach($bExecution as $item){
            $data['name'][] = $item->shortname;
            $data['bExecution'][] = $item->bExecution;
            $data['bAverage'][] = $item->bAverage;
            $data['bAll'][] = $item->bAll;
        }
        // dd($data);
        return json_encode($data);
    }
    public function getLifecyclemanagement(){
        $bExecution =  DB::table('corporateprofilepages')->select('shortname','management','managementAverage','managementAll')->orderBy('shortname', 'desc')->get();
        foreach($bExecution as $item){
            $data['name'][] = $item->shortname;
            $data['management'][] = $item->management;
            $data['managementAverage'][] = $item->managementAverage;
            $data['managementAll'][] = $item->managementAll;
        }
        // dd($data);
        return json_encode($data);
    }

    public function getCommunityWellbeing(){
        $bExecution =  DB::table('corporateprofilepages')->select('shortname','communityExecution','communityAverage','communityAll')->orderBy('shortname', 'desc')->get();
        foreach($bExecution as $item){
            $data['name'][] = $item->shortname;
            $data['communityExecution'][] = $item->communityExecution;
            $data['communityAverage'][] = $item->communityAverage;
            $data['communityAll'][] = $item->communityAll;
        }
        // dd($data);
        return json_encode($data);
    }

    public function getWorkingConditions(){
        $bExecution =  DB::table('corporateprofilepages')->select('shortname','condition','workingAverage','workingAll')->orderBy('shortname', 'desc')->get();
        foreach($bExecution as $item){
            $data['name'][] = $item->shortname;
            $data['condition'][] = $item->condition;
            $data['workingAverage'][] = $item->workingAverage;
            $data['workingAll'][] = $item->workingAll;
        }
        // dd($data);
        return json_encode($data);
    }

    public function getEnviromentalResponsibility(){
        $bExecution =  DB::table('corporateprofilepages')->select('shortname','eResponsibility','eAverage','fAll')->orderBy('shortname', 'desc')->get();
        foreach($bExecution as $item){
            $data['name'][] = $item->shortname;
            $data['eResponsibility'][] = $item->eResponsibility;
            $data['eAverage'][] = $item->eAverage;
            $data['fAll'][] = $item->fAll;
        }
        // dd($data);
        return json_encode($data);
    }

    public function index(){
        $dataEconomicDevelopment = $this->getEconomicDevelopment();
        $dataBussinessConduct = $this->getBussinesConduct();
        $dataLifecyclemanagement = $this->getLifecyclemanagement();
        $dataCommunitywellbeing = $this->getCommunityWellbeing();
        $dataWorkingconditions = $this->getWorkingConditions();
        $dataEnviromental = $this->getEnviromentalResponsibility();
        $resultCode = $this->getCode();
        $title = 'Index - Kinerja Tambang Indonesia';
        $nav = 'index';
        return view('pages.index', compact('title','resultCode', 'nav', 'dataEconomicDevelopment', 'dataBussinessConduct', 'dataLifecyclemanagement', 'dataCommunitywellbeing','dataWorkingconditions', 'dataEnviromental'));
    }

    public function new(){
        $dataEconomicDevelopment = $this->getEconomicDevelopment();
        $dataBussinessConduct = $this->getBussinesConduct();
        $dataLifecyclemanagement = $this->getLifecyclemanagement();
        $dataCommunitywellbeing = $this->getCommunityWellbeing();
        $dataWorkingconditions = $this->getWorkingConditions();
        $dataEnviromental = $this->getEnviromentalResponsibility();
        $resultCode = $this->getCode();
        $title = 'Index - Kinerja Tambang Indonesia';
        $nav = 'index';
        return view('pages.new', compact('title','resultCode', 'nav', 'dataEconomicDevelopment', 'dataBussinessConduct', 'dataLifecyclemanagement', 'dataCommunitywellbeing','dataWorkingconditions', 'dataEnviromental'));
    }

}
