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
}
