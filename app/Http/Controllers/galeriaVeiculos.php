<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galeriaVeiculos extends Controller
{
   public function index(){
      return view('estoque');
      
   }
}
