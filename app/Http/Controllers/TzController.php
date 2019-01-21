<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use duzun\hQuery;

class TzController extends Controller
{
    public function index(){


        $doc = hQuery::fromFile('https://twitter.com/IHateMy95565730');
        
        $img = $doc->find('img:parent');

  

        return $img;
}
}
