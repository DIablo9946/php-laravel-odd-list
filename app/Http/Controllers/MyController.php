<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function oddnumb(){

      $arr = [];
      for ($i = 10; $i<100; $i++){
        if ($i%2 !==0){
          $arr[] = $i;
        }
      }

      return view("odd", compact("arr"));
    }
}
