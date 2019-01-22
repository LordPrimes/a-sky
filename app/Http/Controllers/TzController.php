<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use duzun\hQuery;

class TzController extends Controller
{
    public function index(){


        function perevernuty($str)
        {
                for($i=0;$i<strlen($str);$i++)
                {
                        $strok = $str[$i].$strok;
                }
                return $strok;
        }
        echo perevernuty('А роза упала на лапу Азора');
}


}
