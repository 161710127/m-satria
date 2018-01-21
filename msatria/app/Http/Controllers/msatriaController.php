<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\msatria;
class msatriaController extends Controller
{
   public function template()
   {
       return view('layout.master');
   }
   public function template1()
   {
       return view('layout.galeri');
   }
   public function template2()
   {
        $a= msatria::all();
       return view('table', compact('a'));
   }
   public function template3()
   {
       return view('layout.paragrap');
   }
   public function template4()
   {
       return view('layout.custom');
   }
   public function template5()
   {
        $a= msatria::all();
       return view('table1', compact('a'));
   }


}
