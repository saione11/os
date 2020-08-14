<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Backendcontroller extends Controller
{
	  // public function __construct()
   //  {
   //      $this->middleware('auth');
   //  }

   public function dashboard()
  	{
  		return view('backend.dashboard');
  	}

   	
}
