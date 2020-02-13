<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
    public function toto(Request $request)
    {   
        $number = $request->input('nb'); 
        return view('toto', [
            'number' => $number,
        ]);
    }
}