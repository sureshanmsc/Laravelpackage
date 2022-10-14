<?php

namespace Suresh\Samppackage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SamppackageController extends Controller
{
    public function concat($s1,$s2){
        $string=$s1."::".$s2;
        return view("samppackage::index",compact('string'));
    }

    public function concatrev($s1,$s2){
        $string=strrev($s1)."::".strrev($s2);
        return view("samppackage::index",compact('string'));
    }
}
