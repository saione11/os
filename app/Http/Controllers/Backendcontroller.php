<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Backendcontroller extends Controller
{
   public function dashboard()
  	{
  		return view('backend.dashboard');
  	}
   	
}
