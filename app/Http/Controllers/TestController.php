<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function test()
    {
        return response()->json(['test' => 'true']);
    }
    public function toto()
    {
        return '<h1>Toto vous répond</h1>';
    }
}