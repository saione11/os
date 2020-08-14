<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	// $items=Item::take(6)->get();
    	$items=Item::orderBy('id','desc')->take(6)->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }

    public function frontitem($value='')
    {
        $items=Item::orderBy('id','desc')->take(8)->get();
    	return view('frontend.items',compact('items'));
	}

	 public function detail($id='')
    {
         $item=Item::find($id);
        // dd($item);
       
    	return view('frontend.detail',compact('item'));
	}

	public function register($value='')
    {
    	return view('frontend.register');
	}

	public function login($value='')
    {
    	return view('frontend.login');
	}
	public function profile($value='')
    {
    	return view('frontend.profile');
	}
	public function checkout($value='')
    {
    	return view('frontend.checkout');
	}

}
