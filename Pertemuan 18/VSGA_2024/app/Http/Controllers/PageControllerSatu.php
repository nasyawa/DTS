<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerSatu extends Controller
{
    //
    public function index(){
        return view ('welcome');
    }
    public function satu(){
        // return "data pertama";
        $arrBuah = ["pisang","rambutan","Duku","Jambu"];
        return view ('pasarBuah')->with('pasarBuah',$arrBuah);
    }
}
