<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use duzun\hQuery;

class TzController extends Controller
{
    public function index(){


        $doc = hQuery::fromFile('https://twitter.com/hashtag/Russia?src=tren');
        
 
        
    

 
  
        $data =[ 
            'img' => $img
            
        ];

        return view('tz')->with($data);
}


}
