<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    protected function jsonWithCORS($data) {
        // origine des requetes c'est * on autorise tout le monde. Quelle genre de méthodes ils peuvent faire -> post get put delete
        return response()->json($data)->header('Access-Control-Allow-Origin', '*')->header('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE');
    }
    protected function emptyWithCors($status){
        return response()->json('', $status)
        ->header('Access-Control-Allow-Origin', '*')->header('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE');
    }
    protected function err404(){
        return $this->emptyWithCors('404');
    }
    protected function err500(){
        return $this->emptyWithCors('500');
    }
    protected function succ200(){
        return $this->emptyWithCors('200');
    }
}
